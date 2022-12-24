<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Repositories\RecordRepository;


class RecordService extends BaseService
{
    protected $recordRepository;

    public function __construct(RecordRepository $recordRepository)
    {
        $this->recordRepository = $recordRepository;
    }

    public function getRecord()
    {
        $records = $this->recordRepository->getRecord(Auth::id(), date('Y'));

        return $records;
    }
}
