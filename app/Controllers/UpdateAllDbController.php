<?php


namespace App\Controllers;

use App\Services\UpdateAllDatabaseService;

class UpdateAllDbController
{
    public function updateAllDb(): void
    {
        (new UpdateAllDatabaseService())->updateBD();
    }
}