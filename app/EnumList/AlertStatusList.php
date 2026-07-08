<?php

namespace App\EnumList;

use App\Classes\Constant;

class AlertStatusList extends ItemList
{
    private array $list;

    public function __construct()
    {
        $this->list = [
            new ItemEnum(
                key: Constant::NORMAL,
                value: "Stock normal"
            ),
            new ItemEnum(
                key: Constant::STOCK_WARNING,
                value: "Seuil bientôt atteint"
            ),
            new ItemEnum(
                key: Constant::STOCK_CRITICAL,
                value: "Seuil atteint"
            ),
            new ItemEnum(
                key: Constant::OUT_OF_STOCK,
                value: "En rupture de stock"
            ),
            new ItemEnum(
                key: Constant::EXPIRING,
                value: "Bientôt expiré"
            ),
            new ItemEnum(
                key: Constant::EXPIRED,
                value: "Expiré"
            ),
        ];

        $this->setItems();
    }

    protected function setItems(): void
    {
        $this->items = $this->list;
    }
}
