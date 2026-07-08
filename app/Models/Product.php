<?php

namespace App\Models;

use App\EntityClasses\EntityField;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    public function alerts(): HasMany
    {
        return $this->hasMany(ProductAlert::class, EntityField::PRODUCT_ID);
    }
}
