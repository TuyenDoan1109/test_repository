<?php

namespace App\Repositories;

abstract class BaseRepository implements BaseRepositoryInterface
{
    // model muốn tương tác
    protected $model;

    public function __construct() {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel() {
        $this->model = app()->make($this->getModel());
    }

    public function getAll() {
        return $this->model->where('deleted_at', null)->get();
    }

    public function getAllWithDeleted() {
        return $this->model->withTrashed()->get();
    }

    public function getOnlyDeleted() {
        return $this->model->where('deleted_at', '!=', null);
    }


    public function getById($id) {
        return $this->model->where('deleted_at', null)->find($id);
    }

    public function create($attributes) {
        return $this->model->create($attributes);
    }

    public function update($id, $attributes) {
        $result = $this->getById($id);
        if($result) {
            return $result->update($attributes);
        }
        return false;
    }

    public function delete($id) {
        $result = $this->getById($id);
        if($result) {
            return $result->delete();
        }
        return false;
    }

    public function deleteForever($id)
    {
        $result = $this->model->withTrashed()->find($id);
        if($result) {
            return $result->forceDelete();
        }
        return false;
    }

    public function restoreDeleted($id)
    {
        $result = $this->model->withTrashed()->find($id);
        if($result) {
            return $result->restore();
        }
    }

}
