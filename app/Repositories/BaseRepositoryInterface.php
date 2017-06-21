<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function makeModel();

    public function resetModel();

    public function newQuery();

    public function all();

    public function find($id);

    public function paginate($limit = null, $columns = ['*']);

    public function lists($column, $key = null);

    public function where($conditions, $operator = null, $value = null);

    public function whereIn($conditions, $value = null);

    public function orWhereIn($conditions, $value = null);

    public function orWhere($conditions, $operator = null, $value = null);

    public function create($inputs);

    public function firstOrCreate($value);

    public function insert($inputs = []);

    public function delete($ids);

    public function singleUpdate($id, $value);

    public function multiUpdate($ids, $field, $value);

    public function getModel();

    public function get($column = ['*']);

    public function uploadImage($files, $path);
}
