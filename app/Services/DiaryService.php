<?php

namespace App\Services;

use App\Repositories\DiaryRepository;


class DiaryService extends BaseService
{
    protected $diaryRepository;

    public function __construct(DiaryRepository $diaryRepository)
    {
        $this->diaryRepository = $diaryRepository;
    }

    public function getDiary($id)
    {
        $diaries = $this->diaryRepository->find(['user_id' => $id]);

        return $diaries;
    }
}
