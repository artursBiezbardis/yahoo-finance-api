<?php


namespace App\Services;

use App\Repositories\QuoteFromDBRepository;

class QuoteFromDBService
{
    public function execute():string
    {
        return (new QuoteFromDBRepository())->execute();
    }
}