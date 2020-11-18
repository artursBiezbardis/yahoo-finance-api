<?php
namespace App\Services;

use App\Repositories\AddNewStockRepository;

class AddNewStockService
{
    public function AddNewStockService($stockJson,$symbol)
    {
        (new AddNewStockRepository())->execute($stockJson,$symbol);
    }
}