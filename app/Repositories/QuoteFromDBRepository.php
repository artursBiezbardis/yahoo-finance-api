<?php


namespace App\Repositories;


class QuoteFromDBRepository
{
    public function execute(): string
    {
        return query()
            ->select('stockInfo')
            ->from('stocks')
            ->where('symbol = :symbol')
            ->setParameter('symbol', (string)$_POST['symbol'])
            ->execute()
            ->fetchOne();
    }
}