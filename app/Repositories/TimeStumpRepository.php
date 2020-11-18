<?php


namespace App\Repositories;


class TimeStumpRepository

{
    public function execute(): string
    {
        return query()->select('updateTime')
            ->from('stocks')
            ->execute()
            ->fetchOne();
    }
}