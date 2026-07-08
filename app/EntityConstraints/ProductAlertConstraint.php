<?php

namespace App\EntityConstraints;

use App\Classes\Constant;
use App\EntityClasses\EntityField;
use App\EntityClasses\EntityTable;
use App\EnumList\AlertStatusList;
use App\Enums\EntityType;
use App\Enums\FieldLabel;

class ProductAlertConstraint extends EntityConstraint
{
    private array $list;

    public function __construct()
    {
        $this->list = [
            new EntityModel(
                type: EntityType::INTEGER,
                name: EntityField::SEUIL,
                label: FieldLabel::SEUIL
            ),
            new EntityModel(
                type: EntityType::ENUM,
                name: EntityField::STATUS,
                label: FieldLabel::STATUS,
                listEnum: (new AlertStatusList())->keys(),
                value: Constant::NORMAL
            ),
            new EntityModel(
                type: EntityType::INTEGER,
                name: EntityField::PRODUCT_ID,
                isForeignKey: true,
                referenceKey: FieldLabel::ID,
                referenceTable: EntityTable::PRODUCTS
            ),
        ];

        $this->items = $this->list;
    }
}
