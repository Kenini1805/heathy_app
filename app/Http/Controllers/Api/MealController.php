<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\MealService;
use App\Http\Controllers\Controller;
use App\Http\Resources\MealResource;

class MealController extends Controller
{
    private $mealService;

    public function __construct(MealService $mealService)
    {
        $this->mealService = $mealService;
    }

    /**
     * Get list meal
     *
     * @OA\Get(
     *     path="/api/meals",
     *     tags={"Top page"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="meals",
     *         @OA\JsonContent(ref="#/components/schemas/MealResource")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *     )
     * )
     * @param  Request $request
     * @return MealResource
     */
    public function index()
    {
        $diaries = $this->mealService->getMeal();

        return MealResource::collection($diaries);
    }
}
