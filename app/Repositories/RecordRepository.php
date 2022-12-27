<?php

namespace App\Repositories;

use App\Models\Record;
use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\RecordRepositoryInterface;

class RecordRepository extends BaseRepository implements RecordRepositoryInterface
{
    protected $model;

    /**
     * RoleRepository construct
     *
     * @param mixed $model
     *
     * @return void
     */
    public function __construct(Record $model)
    {
        parent::__construct($model);
    }

    public function getRecord($userId, $chartType)
    {
        if ($chartType == 'year') {
            return $this->model->selectRaw("round(AVG(weight),0) as weight, round(AVG(body_fat),0) as body_fat, $chartType")
                ->where('user_id', $userId)->groupBy($chartType)->orderBy($chartType)->get();
        }
        if ($chartType == 'day') {
            return $this->model->selectRaw("round(AVG(weight),0) as weight, round(AVG(body_fat),0) as body_fat, $chartType")
                ->where('user_id', $userId)->groupBy($chartType)->where('month', date('m'))->where('year', date('Y'))->orderBy($chartType)->get();
        }

        return $this->model->selectRaw("round(AVG(weight),0) as weight, round(AVG(body_fat),0) as body_fat, $chartType")->where('user_id', $userId)
            ->where('year', date('Y'))->groupBy($chartType)->orderBy($chartType)->get();
    }
}
