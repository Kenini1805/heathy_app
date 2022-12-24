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
    public function index()
    {
        $records = $this->recordService->getRecord();

        return RecordResource::collection($records);
    }
}
