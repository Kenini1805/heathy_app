<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\DiaryService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\DiaryResource;

class DiaryController extends Controller
{
    private $diaryService;

    public function __construct(DiaryService $diaryService)
    {
        $this->diaryService = $diaryService;
    }

    /**
     * Get list my diary
     *
     * @OA\Get(
     *     path="/api/diaries",
     *     tags={"Top page", "My record"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Diaries",
     *         @OA\JsonContent(ref="#/components/schemas/DiaryResource")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *     )
     * )
     * @param  Request $request
     * @return DiaryResource
     */
    public function index()
    {
        $id = Auth::id();
        $diaries = $this->diaryService->getDiary($id);

        return DiaryResource::collection($diaries);
    }
}
