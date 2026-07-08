<?php

namespace Database\Seeders;

use App\EntityClasses\EntityField;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Produits non expirables
        Product::create([
            EntityField::NUMBER => 'A7K9P2M',
            EntityField::NAME => 'Table à manger',
            EntityField::PRICE => 25000,
            EntityField::COUNT => 10,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'B4X8Q1L',
            EntityField::NAME => 'Chaise en bois',
            EntityField::PRICE => 8000,
            EntityField::COUNT => 35,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'C9N5R7T',
            EntityField::NAME => 'Canapé 3 places',
            EntityField::PRICE => 185000,
            EntityField::COUNT => 5,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'D2V6H8J',
            EntityField::NAME => 'Lit double',
            EntityField::PRICE => 150000,
            EntityField::COUNT => 7,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'E8M3W4P',
            EntityField::NAME => 'Armoire 4 portes',
            EntityField::PRICE => 220000,
            EntityField::COUNT => 4,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'F1Q7K9N',
            EntityField::NAME => 'Réfrigérateur 350L',
            EntityField::PRICE => 320000,
            EntityField::COUNT => 6,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'G5T2X6R',
            EntityField::NAME => 'Télévision LED 55 pouces',
            EntityField::PRICE => 450000,
            EntityField::COUNT => 8,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'H9L4C8V',
            EntityField::NAME => 'Machine à laver 8Kg',
            EntityField::PRICE => 280000,
            EntityField::COUNT => 5,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'J3P7M1K',
            EntityField::NAME => 'Four micro-ondes',
            EntityField::PRICE => 65000,
            EntityField::COUNT => 12,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'K8R5N2Q',
            EntityField::NAME => 'Ventilateur sur pied',
            EntityField::PRICE => 30000,
            EntityField::COUNT => 18,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'L4W9T6X',
            EntityField::NAME => 'Climatiseur 1.5 CV',
            EntityField::PRICE => 350000,
            EntityField::COUNT => 3,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'M7H1P8C',
            EntityField::NAME => 'Bureau informatique',
            EntityField::PRICE => 90000,
            EntityField::COUNT => 9,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'N2X6L5R',
            EntityField::NAME => 'Étagère métallique',
            EntityField::PRICE => 55000,
            EntityField::COUNT => 14,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'P9K4V7M',
            EntityField::NAME => 'Cuisinière à gaz',
            EntityField::PRICE => 170000,
            EntityField::COUNT => 6,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'Q5C8J2T',
            EntityField::NAME => 'Aspirateur',
            EntityField::PRICE => 85000,
            EntityField::COUNT => 11,
            EntityField::EXPIRATION_DATE => null,
        ]);

        // Produits expirables
        Product::create([
            EntityField::NUMBER => 'R1N7W9H',
            EntityField::NAME => 'Lait UHT 1L',
            EntityField::PRICE => 1200,
            EntityField::COUNT => 80,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(5),
        ]);
        Product::create([
            EntityField::NUMBER => 'S6P3X4K',
            EntityField::NAME => 'Jus d\'orange 1L',
            EntityField::PRICE => 1800,
            EntityField::COUNT => 60,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(4),
        ]);
        Product::create([
            EntityField::NUMBER => 'T8Q5M1L',
            EntityField::NAME => 'Yaourt nature',
            EntityField::PRICE => 750,
            EntityField::COUNT => 100,
            EntityField::EXPIRATION_DATE => Carbon::now()->addDays(20),
        ]);
        Product::create([
            EntityField::NUMBER => 'V4R9C7N',
            EntityField::NAME => 'Huile végétale 1L',
            EntityField::PRICE => 2500,
            EntityField::COUNT => 40,
            EntityField::EXPIRATION_DATE => Carbon::now()->addYear(),
        ]);
        Product::create([
            EntityField::NUMBER => 'W2H6P8J',
            EntityField::NAME => 'Riz 5 Kg',
            EntityField::PRICE => 6500,
            EntityField::COUNT => 30,
            EntityField::EXPIRATION_DATE => Carbon::now()->addYears(2),
        ]);
        Product::create([
            EntityField::NUMBER => 'X7T1K5Q',
            EntityField::NAME => 'Biscuits chocolat',
            EntityField::PRICE => 1500,
            EntityField::COUNT => 75,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(8),
        ]);
        Product::create([
            EntityField::NUMBER => 'Y9M4R2V',
            EntityField::NAME => 'Eau de Javel 1L',
            EntityField::PRICE => 1800,
            EntityField::COUNT => 45,
            EntityField::EXPIRATION_DATE => Carbon::now()->addYears(2),
        ]);
        Product::create([
            EntityField::NUMBER => 'Z3L8N6P',
            EntityField::NAME => 'Shampooing 400ml',
            EntityField::PRICE => 3500,
            EntityField::COUNT => 28,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(18),
        ]);
        Product::create([
            EntityField::NUMBER => '2A7X5KQ',
            EntityField::NAME => 'Dentifrice',
            EntityField::PRICE => 1200,
            EntityField::COUNT => 55,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(24),
        ]);
        Product::create([
            EntityField::NUMBER => '3B9M1RT',
            EntityField::NAME => 'Crème hydratante',
            EntityField::PRICE => 4200,
            EntityField::COUNT => 20,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(15),
        ]);

        // =========================
        // Produits (26 - 50)
        // =========================
        Product::create([
            EntityField::NUMBER => '4C6P8VH',
            EntityField::NAME => 'Table basse en verre',
            EntityField::PRICE => 45000,
            EntityField::COUNT => 8,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => '5D2Q7LN',
            EntityField::NAME => 'Fauteuil de bureau',
            EntityField::PRICE => 75000,
            EntityField::COUNT => 10,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => '6E8K4WX',
            EntityField::NAME => 'Commode 5 tiroirs',
            EntityField::PRICE => 120000,
            EntityField::COUNT => 6,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => '7F1R9MC',
            EntityField::NAME => 'Bibliothèque en bois',
            EntityField::PRICE => 95000,
            EntityField::COUNT => 7,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => '8G5T2PJ',
            EntityField::NAME => 'Congélateur 250L',
            EntityField::PRICE => 295000,
            EntityField::COUNT => 4,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => '9H7N6QL',
            EntityField::NAME => 'Mixeur électrique',
            EntityField::PRICE => 28000,
            EntityField::COUNT => 15,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'A2V8X4R',
            EntityField::NAME => 'Bouilloire électrique',
            EntityField::PRICE => 18000,
            EntityField::COUNT => 18,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'B6K1P9T',
            EntityField::NAME => 'Fer à repasser',
            EntityField::PRICE => 22000,
            EntityField::COUNT => 12,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'C4M7H2W',
            EntityField::NAME => 'Télévision Smart 43 pouces',
            EntityField::PRICE => 280000,
            EntityField::COUNT => 6,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'D9Q5L8N',
            EntityField::NAME => 'Cafetière électrique',
            EntityField::PRICE => 35000,
            EntityField::COUNT => 10,
            EntityField::EXPIRATION_DATE => null,
        ]);
        Product::create([
            EntityField::NUMBER => 'E3R6X1K',
            EntityField::NAME => 'Pâtes alimentaires 500g',
            EntityField::PRICE => 900,
            EntityField::COUNT => 120,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(18),
        ]);
        Product::create([
            EntityField::NUMBER => 'F8P2V7M',
            EntityField::NAME => 'Sucre 1 Kg',
            EntityField::PRICE => 1300,
            EntityField::COUNT => 90,
            EntityField::EXPIRATION_DATE => Carbon::now()->addYears(2),
        ]);
        Product::create([
            EntityField::NUMBER => 'G1T9C5Q',
            EntityField::NAME => 'Farine de blé 1 Kg',
            EntityField::PRICE => 1400,
            EntityField::COUNT => 70,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(12),
        ]);
        Product::create([
            EntityField::NUMBER => 'H5N4W8L',
            EntityField::NAME => 'Boîte de sardines',
            EntityField::PRICE => 1500,
            EntityField::COUNT => 100,
            EntityField::EXPIRATION_DATE => Carbon::now()->addYears(3),
        ]);
        Product::create([
            EntityField::NUMBER => 'J7X3R6P',
            EntityField::NAME => 'Café moulu 250g',
            EntityField::PRICE => 3500,
            EntityField::COUNT => 40,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(15),
        ]);
        Product::create([
            EntityField::NUMBER => 'K2L9M1V',
            EntityField::NAME => 'Thé en sachets',
            EntityField::PRICE => 2200,
            EntityField::COUNT => 55,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(20),
        ]);
        Product::create([
            EntityField::NUMBER => 'L8Q4T7H',
            EntityField::NAME => 'Savon de toilette',
            EntityField::PRICE => 700,
            EntityField::COUNT => 150,
            EntityField::EXPIRATION_DATE => Carbon::now()->addYears(3),
        ]);
        Product::create([
            EntityField::NUMBER => 'M5C2K9N',
            EntityField::NAME => 'Liquide vaisselle 1L',
            EntityField::PRICE => 1800,
            EntityField::COUNT => 65,
            EntityField::EXPIRATION_DATE => Carbon::now()->addYears(2),
        ]);
        Product::create([
            EntityField::NUMBER => 'N7P6X3R',
            EntityField::NAME => 'Détergent en poudre 2Kg',
            EntityField::PRICE => 4500,
            EntityField::COUNT => 40,
            EntityField::EXPIRATION_DATE => Carbon::now()->addYears(2),
        ]);
        Product::create([
            EntityField::NUMBER => 'P1W8L5Q',
            EntityField::NAME => 'Eau minérale 1.5L',
            EntityField::PRICE => 600,
            EntityField::COUNT => 200,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(24),
        ]);
        Product::create([
            EntityField::NUMBER => 'Q9H2V4M',
            EntityField::NAME => 'Boisson gazeuse 33cl',
            EntityField::PRICE => 700,
            EntityField::COUNT => 180,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(10),
        ]);
        Product::create([
            EntityField::NUMBER => 'R6T7N1C',
            EntityField::NAME => 'Confiture de fraise',
            EntityField::PRICE => 2800,
            EntityField::COUNT => 35,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(18),
        ]);
        Product::create([
            EntityField::NUMBER => 'S4K8P5X',
            EntityField::NAME => 'Mayonnaise 500ml',
            EntityField::PRICE => 2400,
            EntityField::COUNT => 45,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(12),
        ]);
        Product::create([
            EntityField::NUMBER => 'T2M9R6L',
            EntityField::NAME => 'Gel douche 500ml',
            EntityField::PRICE => 3200,
            EntityField::COUNT => 38,
            EntityField::EXPIRATION_DATE => Carbon::now()->addMonths(24),
        ]);
        Product::create([
            EntityField::NUMBER => 'V7Q1H3N',
            EntityField::NAME => 'Papier hygiénique (12 rouleaux)',
            EntityField::PRICE => 5200,
            EntityField::COUNT => 50,
            EntityField::EXPIRATION_DATE => Carbon::now()->addYears(5),
        ]);
    }
}
