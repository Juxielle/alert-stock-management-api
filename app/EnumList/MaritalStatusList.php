<?php

namespace App\EnumList;

class MaritalStatusList extends ItemList
{
    private array $list;

    public function __construct()
    {
        $this->list = [
            new ItemEnum(
                key: "single",
                value: "Cellibataire"
            ),
            new ItemEnum(
                key: "married",
                value: "Marié(e)"
            ),
            new ItemEnum(
                key: "divorce",
                value: "Divorcé(e)"
            ),
            new ItemEnum(
                key: "widower",
                value: "Veuf(ve)"
            ),
            new ItemEnum(
                key: "cohabitation",
                value: "Concubinage"
            ),
        ];

        $this->setItems();
    }

    protected function setItems(): void
    {
        $this->items = $this->list;
    }
}
