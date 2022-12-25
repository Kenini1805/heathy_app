<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\RecordService;
use App\Http\Controllers\Controller;
use App\Http\Resources\RecordResource;

class RecordController extends Controller
{
    private $recordService;

    public function __construct(RecordService $recordService)
    {
        $this->recordService = $recordService;
    }

    /**
     * Get my record for chart
     *
     * @OA\Get(
     *     path="/api/records",
     *     tags={"Top page", "My record"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *          in="query",
     *          name="type",
     *          required=false,
     *          @OA\Schema(
     *            type="string"
     *          )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="meals",
     *         @OA\JsonContent(ref="#/components/schemas/RecordResource")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *     )
     * )
     * @return RecordResource
     */
    public function index(Request $request)
    {
        $chartType = $request->type ?? 'month';
        $records = $this->recordService->getRecord($chartType);

        return RecordResource::collection($records);
    }
}
