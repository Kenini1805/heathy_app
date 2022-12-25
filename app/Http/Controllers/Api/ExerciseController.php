<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\ExerciseService;
use App\Http\Controllers\Controller;
use App\Http\Resources\ExerciseResource;

class ExerciseController extends Controller
{
    private $exerciseService;

    public function __construct(ExerciseService $exerciseService)
    {
        $this->exerciseService = $exerciseService;
    }

    /**
     * Get my exercise for chart
     *
     * @OA\Get(
     *     path="/api/exercises",
     *     tags={"My record"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *          in="path",
     *          name="date",
     *          required=false,
     *          description="Date",
     *          @OA\Schema(
     *            type="string",
     *            format="date"
     *          )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Success",
     *         @OA\JsonContent(ref="#/components/schemas/ExerciseResource")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *     ),
     *     @OA\Response(
     *         response=401,
     *         description="Unauthenticated"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Not found"
     *     ),
     *     @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *     ),
     * )
     * @param Request $request
     * @return ExerciseResource
     */
    public function index(Request $request)
    {
        $date = $request->date ?? date("Y-m-d");
        $exercises = $this->exerciseService->getExercise($date);

        return ExerciseResource::collection($exercises);
    }
}
