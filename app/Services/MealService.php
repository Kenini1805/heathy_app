<?php

namespace App\Services;

use App\Repositories\MealRepository;


class MealService extends BaseService
{
    protected $mealRepository;

    public function __construct(MealRepository $mealRepository)
    {
        $this->mealRepository = $mealRepository;
    }

    public function getMeal()
    {
        $meals = $this->mealRepository->findAll();

        return $meals;
    }
}
