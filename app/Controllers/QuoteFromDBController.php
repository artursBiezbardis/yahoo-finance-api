<?php


namespace App\Controllers;

use App\Services\QuoteFromDBService;

class QuoteFromDBController
{
    public function getQuoteFromDBController(): string
    {
        return (new QuoteFromDBService())->execute();
    }
}