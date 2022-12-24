<?php

namespace App\Services;

use App\Repositories\ColumnRepository;


class ColumnService extends BaseService
{
    protected $columnRepository;

    public function __construct(ColumnRepository $columnRepository)
    {
        $this->columnRepository = $columnRepository;
    }

    public function getColumn()
    {
        $columns = $this->columnRepository->findAll();

        return $columns;
    }
}
