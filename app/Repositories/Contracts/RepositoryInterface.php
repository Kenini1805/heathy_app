<?php

namespace App\Repositories\Contracts;

/**
 * Interface BaseRepositoryInterface
 *
 * @package App\Repositories
 */
interface RepositoryInterface
{
    /**
     * Find all existing record
     *
     * @return Model
     */
    public function findAll();

    /**
     * Find all records that match a given conditions
     *
     * @param array $conditions
     *
     * @return Model[]
     */
    public function find(array $conditions = []);
}
