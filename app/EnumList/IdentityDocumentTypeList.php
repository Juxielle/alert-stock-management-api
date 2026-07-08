<?php

namespace App\EnumList;

class IdentityDocumentTypeList extends ItemList
{
    private array $list;

    public function __construct()
    {
        $this->list = [
            new ItemEnum(
                key: "cni",
                value: "CNI"
            ),
            new ItemEnum(
                key: "passport",
                value: "Passeport"
            ),
            new ItemEnum(
                key: "residence-permit",
                value: "Carte de séjour"
            ),
            new ItemEnum(
                key: "license",
                value: "Permis de conduire"
            ),
        ];

        $this->setItems();
    }

    protected function setItems(): void
    {
        $this->items = $this->list;
    }
}
