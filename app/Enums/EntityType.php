<?php

namespace App\Enums;

abstract class EntityType
{
    const STRING = "string";
    const DATE = "date";
    const ENUM = "enum";
    const BOOLEAN = "boolean";
    const INTEGER = "integer";
    const FLOAT = "float";
    const FILE = "file";
    const EMAIL = "email";
}