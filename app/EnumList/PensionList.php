<?php

namespace App\EnumList;

class PensionList extends ItemList
{
    private array $list;

    public function __construct()
    {
        $this->list = [
            new ItemEnum(
                key: "oldess-pension",
                value: "Pension d'Allocation de Vieillesse"
            ),
            new ItemEnum(
                key: "survivor-pension",
                value: "Pension d'Allocation de Survivant"
            ),
            new ItemEnum(
                key: "invalidity-pension",
                value: "Pension d'Invalidité"
            ),
            new ItemEnum(
                key: "anticiped-pension",
                value: "Pension Anticipée"
            ),
        ];

        $this->setItems();
    }

    protected function setItems(): void
    {
        $this->items = $this->list;
    }
}
