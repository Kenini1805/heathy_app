<?php

namespace App\Repositories;

use App\Models\Column;
use App\Repositories\Contracts\ColumnRepositoryInterface;

class ColumnRepository extends BaseRepository implements ColumnRepositoryInterface
{
    protected $model;

    /**
     * RoleRepository construct
     *
     * @param mixed $model
     *
     * @return void
     */
    public function __construct(Column $model)
    {
        parent::__construct($model);
    }
}
