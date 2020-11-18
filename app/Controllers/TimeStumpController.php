<?php


namespace App\Controllers;

use App\Repositories\TimeStumpRepository;
class TimeStumpController
{
    public function getTimeStampFromDB()
    {
        return (new TimeStumpRepository())->execute();
    }
}