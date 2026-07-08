<?php

namespace App\Services;

class AutoGeneratorService
{
    public static function buildNumber(string $prefix, string $suffix): string
    {
        $timestamp = time();
        $id = strtoupper(base_convert($timestamp, 10, 36));
        return $prefix . substr($id, -5) . $suffix;
    }
}
