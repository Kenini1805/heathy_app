<?php

namespace App\Repositories\Contracts;

interface RecordRepositoryInterface extends RepositoryInterface
{
    public function getRecord($userId, $year);
}
