<?php

namespace App\EnumList;

class CountryList extends ItemList
{
    private array $list;

    public function __construct()
    {
        $this->list = [
            new ItemEnum(
                key: "gabon",
                value: "Gabon",
                data: "Gabonaise"
            ),
            new ItemEnum(
                key: "cameroun",
                value: "Cameroune",
                data: "Camerounaise"
            ),
            new ItemEnum(
                key: "congo",
                value: "Congo Brazzaville",
                data: "Congolaise"
            ),
            new ItemEnum(
                key: "centrafric",
                value: "Centrafrique",
                data: "Centrafricaine"
            ),
        ];

        $this->setItems();
    }

    protected function setItems(): void
    {
        $this->items = $this->list;
    }
}
