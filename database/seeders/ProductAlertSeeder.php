<?php

namespace Database\Seeders;

use App\EntityClasses\EntityField;
use App\Models\ProductAlert;
use Illuminate\Database\Seeder;

class ProductAlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductAlert::create([
            EntityField::SEUIL => 2,
            EntityField::PRODUCT_ID => 1,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 8,
            EntityField::PRODUCT_ID => 2,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 1,
            EntityField::PRODUCT_ID => 3,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 2,
            EntityField::PRODUCT_ID => 4,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 1,
            EntityField::PRODUCT_ID => 5,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 2,
            EntityField::PRODUCT_ID => 6,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 2,
            EntityField::PRODUCT_ID => 7,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 2,
            EntityField::PRODUCT_ID => 8,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 4,
            EntityField::PRODUCT_ID => 9,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 6,
            EntityField::PRODUCT_ID => 10,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 1,
            EntityField::PRODUCT_ID => 11,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 3,
            EntityField::PRODUCT_ID => 12,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 5,
            EntityField::PRODUCT_ID => 13,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 2,
            EntityField::PRODUCT_ID => 14,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 3,
            EntityField::PRODUCT_ID => 15,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 20,
            EntityField::PRODUCT_ID => 16,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 15,
            EntityField::PRODUCT_ID => 17,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 25,
            EntityField::PRODUCT_ID => 18,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 10,
            EntityField::PRODUCT_ID => 19,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 8,
            EntityField::PRODUCT_ID => 20,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 15,
            EntityField::PRODUCT_ID => 21,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 10,
            EntityField::PRODUCT_ID => 22,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 8,
            EntityField::PRODUCT_ID => 23,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 12,
            EntityField::PRODUCT_ID => 24,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 5,
            EntityField::PRODUCT_ID => 25,
        ]);

        // =========================
        // Seuils d'alerte (26 - 50)
        // =========================
        ProductAlert::create([
            EntityField::SEUIL => 2,
            EntityField::PRODUCT_ID => 26,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 3,
            EntityField::PRODUCT_ID => 27,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 2,
            EntityField::PRODUCT_ID => 28,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 2,
            EntityField::PRODUCT_ID => 29,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 1,
            EntityField::PRODUCT_ID => 30,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 5,
            EntityField::PRODUCT_ID => 31,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 6,
            EntityField::PRODUCT_ID => 32,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 4,
            EntityField::PRODUCT_ID => 33,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 2,
            EntityField::PRODUCT_ID => 34,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 3,
            EntityField::PRODUCT_ID => 35,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 30,
            EntityField::PRODUCT_ID => 36,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 20,
            EntityField::PRODUCT_ID => 37,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 15,
            EntityField::PRODUCT_ID => 38,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 25,
            EntityField::PRODUCT_ID => 39,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 10,
            EntityField::PRODUCT_ID => 40,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 12,
            EntityField::PRODUCT_ID => 41,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 30,
            EntityField::PRODUCT_ID => 42,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 15,
            EntityField::PRODUCT_ID => 43,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 10,
            EntityField::PRODUCT_ID => 44,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 40,
            EntityField::PRODUCT_ID => 45,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 35,
            EntityField::PRODUCT_ID => 46,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 10,
            EntityField::PRODUCT_ID => 47,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 12,
            EntityField::PRODUCT_ID => 48,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 10,
            EntityField::PRODUCT_ID => 49,
        ]);
        ProductAlert::create([
            EntityField::SEUIL => 12,
            EntityField::PRODUCT_ID => 50,
        ]);
    }
}
