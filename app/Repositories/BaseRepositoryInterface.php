<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function getAll();
    public function getAllWithDeleted();
    public function getOnlyDeleted();
    public function getById($id);
    public function create($attributes);
    public function update($id, $attributes);
    public function delete($id);
    public function deleteForever($id);
    public function restoreDeleted($id);
}
