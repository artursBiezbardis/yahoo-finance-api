<?php


namespace App\Services;

use App\Repositories\RequestArrayOfStockSymbolsInDBForValidationRepository;

class RequestArrayOfStockSymbolsInDBForValidationService
{
    public function request():array
    {
        return (new RequestArrayOfStockSymbolsInDBForValidationRepository())->request();
    }
}