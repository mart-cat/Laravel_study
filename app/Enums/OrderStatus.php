<?php
namespace App\Enums;

class OrderStatus
{
    const NEW = 1;
    const APPROVED = 2;
    const DELIVERED = 3;

    public static function labels(): array
    {
        return [
            self::NEW => 'Новый',
            self::APPROVED => 'Одобрен',
            self::DELIVERED => 'Доставлен',
        ];
    }

    public static function label(int $status): string
    {
        return self::labels()[$status] ?? 'Неизвестный статус';
    }
}
