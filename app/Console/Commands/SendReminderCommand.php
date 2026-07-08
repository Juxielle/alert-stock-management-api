<?php

namespace App\Console\Commands;

use App\Classes\Constant;
use App\Events\NewMessage;
use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendReminderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-reminder-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //php artisan schedule:work
        Log::info("exécution de la commande effectuée avec succès...");
        try {
            $today = now();
            $products = Product::all();

            $groupedProducts = [
                Constant::NORMAL => 0,
                Constant::STOCK_WARNING => 0,
                Constant::STOCK_CRITICAL => 0,
                Constant::OUT_OF_STOCK => 0,
                Constant::EXPIRING => 0,
                Constant::EXPIRED => 0,
            ];

            foreach ($products as $product) {
                // 75 % de chance de vendre
                if (rand(1, 100) <= 75) {
                    $quantity = rand(1, 8);
                    $product->count = max(0, $product->count - $quantity);
                }

                // 15 % de chance de réapprovisionnement
                if (rand(1, 100) <= 15) {
                    $product->count += rand(10, 30);
                }

                // Détermination du statut
                $status = Constant::NORMAL;
                // Produits expirables
                if ($product->expiration_date != null) {
                    if ($today->greaterThan($product->expiration_date)) {
                        $status = Constant::EXPIRED;
                    } elseif ($today->diffInDays($product->expiration_date) <= 30) {
                        $status = Constant::EXPIRING;
                    }
                }

                // Si pas expiré, on regarde le stock
                if (count($product->alerts) == 0) continue;
                $alert = $product->alerts[0];

                if ($status == Constant::NORMAL) {
                    $threshold = $alert->seuil;
                    if ($product->count == 0) {
                        $status = Constant::OUT_OF_STOCK;
                    } elseif ($product->count <= $threshold) {
                        $status = Constant::STOCK_CRITICAL;
                    } elseif ($product->count <= ceil($threshold * 1.5)) {
                        $status = Constant::STOCK_WARNING;
                    }
                }

                $product->save();

                $alert->status = $status;
                $alert->save();
                $groupedProducts[$status] += 1;
            }
            Log::info("fin de l'exécution de la commande...");

            event(new NewMessage($groupedProducts));
        } catch (\Illuminate\Broadcasting\BroadcastException $e) {
            Log::info('Echecc d\'envoie des levels par pusher.');
        }

        return self::SUCCESS;
    }
}
