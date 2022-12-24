<?php

namespace App\Repositories;

use App\Models\Diary;
use App\Repositories\Contracts\DiaryRepositoryInterface;

class DiaryRepository extends BaseRepository implements DiaryRepositoryInterface
{
    protected $model;

    /**
     * RoleRepository construct
     *
     * @param mixed $model
     *
     * @return void
     */
    public function __construct(Diary $model)
    {
        parent::__construct($model);
    }
}
