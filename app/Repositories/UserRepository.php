<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $model;

    /**
     * RoleRepository construct
     *
     * @param mixed $model
     *
     * @return void
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
