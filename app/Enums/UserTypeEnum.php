<?php

namespace App\Enums;

enum UserTypeEnum: int
{
    case User = 1;
    case Admin = 2;

    public function label(): string
    {
        return match ($this) {
            self::User => 'مستخدم',
            self::Admin => 'مدير',
        };
    }
}
