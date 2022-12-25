<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\ColumnService;
use App\Http\Controllers\Controller;
use App\Http\Resources\ColumnResource;

class ColumnController extends Controller
{
    private $columnService;

    public function __construct(ColumnService $columnService)
    {
        $this->columnService = $columnService;
    }

    /**
     * Get list column
     *
     * @OA\Get(
     *     path="/api/columns",
     *     tags={"Column"},
     *     @OA\Response(
     *         response=200,
     *         description="Diaries",
     *         @OA\JsonContent(ref="#/components/schemas/ColumnResource")
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
     * 
     * @return ColumnResource
     */
    public function index()
    {
        $columns = $this->columnService->getColumn();

        return ColumnResource::collection($columns);
    }
}
