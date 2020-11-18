<?php


namespace App\Repositories;


class AddNewStockRepository
{
    public function execute(string $stockJson, string $symbol): void
    {
        query()
            ->insert('stocks')
            ->values([
                'symbol' => ':symbol',
                'stockInfo' => ':stockInfo'
            ])
            ->setParameters([

                'symbol' => $symbol,
                'stockInfo' => $stockJson
            ])
            ->execute();
    }

    public function deleteAllTableContent(): void
    {
        query()->delete('stocks')->execute();
    }
}