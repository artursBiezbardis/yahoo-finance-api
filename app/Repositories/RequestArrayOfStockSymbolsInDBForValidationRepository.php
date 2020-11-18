<?php


namespace App\Repositories;


class RequestArrayOfStockSymbolsInDBForValidationRepository
{
    public function request(): array
    {
        return query()->select('symbol')
            ->from('stocks')
            ->execute()
            ->fetchFirstColumn();
    }
}