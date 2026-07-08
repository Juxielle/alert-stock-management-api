<?php

namespace App\Models;

use App\EntityClasses\EntityField;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductAlert extends Model
{
    public function alerts(): BelongsTo
    {
        return $this->belongsTo(Product::class, EntityField::PRODUCT_ID);
    }
}
