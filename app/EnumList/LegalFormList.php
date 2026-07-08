<?php

namespace App\EnumList;

class LegalFormList extends ItemList
{
    private array $list;

    public function __construct()
    {
        $this->list = [
            new ItemEnum(
                key: "sarl",
                value: "SARL"
            ),
            new ItemEnum(
                key: "sas",
                value: "SAS"
            ),
            new ItemEnum(
                key: "sa",
                value: "SA"
            ),
        ];

        $this->setItems();
    }

    protected function setItems(): void
    {
        $this->items = $this->list;
    }
}
