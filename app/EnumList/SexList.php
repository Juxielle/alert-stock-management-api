<?php

namespace App\EnumList;

class SexList extends ItemList
{
    private array $list;

    public function __construct()
    {
        $this->list = [
            new ItemEnum(
                key: "M",
                value: "Masculin"
            ),
            new ItemEnum(
                key: "F",
                value: "Feminin"
            ),
        ];

        $this->setItems();
    }

    protected function setItems(): void
    {
        $this->items = $this->list;
    }
}
