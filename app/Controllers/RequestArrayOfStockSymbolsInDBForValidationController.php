<?php


namespace App\Controllers;

use App\Services\RequestArrayOfStockSymbolsInDBForValidationService;

class RequestArrayOfStockSymbolsInDBForValidationController
{
    public function RequestArrayOfStockSymbolsInDBForValidation()
    {
        return (new RequestArrayOfStockSymbolsInDBForValidationService)->request();
    }
}