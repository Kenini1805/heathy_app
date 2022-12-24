<?php

namespace App\Repositories;

use App\Models\Record;
use App\Repositories\Contracts\RecordRepositoryInterface;

class RecordRepository extends BaseRepository implements RecordRepositoryInterface
{
    protected $model;

    /**
     * RoleRepository construct
     *
     * @param mixed $model
     *
     * @return void
     */
    public function __construct(Record $model)
    {
        parent::__construct($model);
    }

    public function getRecord($userId, $year)
    {
        return $this->model->where('user_id', $userId)->where('year', $year)->get();
    }
}
