<?php

namespace App\EntityConstraints;

use App\EntityClasses\EntityField;
use App\Enums\EntityType;
use App\Enums\FieldLabel;

class ProductConstraint extends EntityConstraint
{
    private array $list;

    public function __construct()
    {
        $this->list = [
            new EntityModel(
                type: EntityType::STRING,
                name: EntityField::NUMBER,
                label: FieldLabel::NUMBER,
                isSearchable: true
            ),
            new EntityModel(
                type: EntityType::STRING,
                name: EntityField::NAME,
                label: FieldLabel::NAME,
                isSearchable: true
            ),
            new EntityModel(
                type: EntityType::FLOAT,
                name: EntityField::PRICE,
                label: FieldLabel::PRICE
            ),
            new EntityModel(
                type: EntityType::INTEGER,
                name: EntityField::COUNT,
                label: FieldLabel::COUNT
            ),
            new EntityModel(
                type: EntityType::DATE,
                name: EntityField::EXPIRATION_DATE,
                label: FieldLabel::EXPIRATION_DATE,
                isNullable: true
            ),
            new EntityModel(
                type: EntityType::STRING,
                name: EntityField::IMAGE,
                label: FieldLabel::IMAGE,
                isNullable: true
            ),
        ];

        $this->items = $this->list;
    }
}
