<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepository;


class UserService extends BaseService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getProfile()
    {
        $user = $this->userRepository->findOne(['id' => Auth::id()]);

        return $user;
    }
}
