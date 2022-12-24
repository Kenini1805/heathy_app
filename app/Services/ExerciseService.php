<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Repositories\ExerciseRepository;


class ExerciseService extends BaseService
{
    protected $exerciseRepository;

    public function __construct(ExerciseRepository $exerciseRepository)
    {
        $this->exerciseRepository = $exerciseRepository;
    }

    public function getExercise($date)
    {
        $exercises = $this->exerciseRepository->find(['date' => $date]);

        return $exercises;
    }
}
