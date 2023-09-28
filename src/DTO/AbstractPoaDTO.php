<?php

namespace Porox\FNSM4D\Client\DTO;

abstract class AbstractPoaDTO
{
    public const STATUS
        = [
            'CREATED'    => "Зарегистрирована",
            'ACTIVE'     => "Активна",
            'EXPIRED'    => "Действие истекло",
            'REVOKED'    => 'Отменена',
            'PROCESSING' => 'Ожидание подтверждения',
            'REJECTED'   => 'Отказ в регистрации'
        ];

    protected string $status;


    public function getStatusText():string
    {
        return self::STATUS[$this->status] ?? $this->status;
    }
}