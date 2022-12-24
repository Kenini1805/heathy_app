<?php

namespace App\Repositories;

use App\Models\Exercise;
use App\Repositories\Contracts\ExerciseRepositoryInterface;

class ExerciseRepository extends BaseRepository implements ExerciseRepositoryInterface
{
    protected $model;

    /**
     * RoleRepository construct
     *
     * @param mixed $model
     *
     * @return void
     */
    public function __construct(Exercise $model)
    {
        parent::__construct($model);
    }
}
