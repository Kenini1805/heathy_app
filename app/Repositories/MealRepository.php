<?php

namespace App\Repositories;

use App\Models\Meal;
use App\Repositories\Contracts\MealRepositoryInterface;

class MealRepository extends BaseRepository implements MealRepositoryInterface
{
    protected $model;

    /**
     * RoleRepository construct
     *
     * @param mixed $model
     *
     * @return void
     */
    public function __construct(Meal $model)
    {
        parent::__construct($model);
    }
}
