<?php declare(strict_types=1);


namespace App\Controllers;

use App\Services\AddNewStockService;

class AddNewStockController
{
    public function AddNewStockController($stockJson, $symbol): void
    {
        (new AddNewStockService())->AddNewStockService($stockJson, $symbol);
    }

}