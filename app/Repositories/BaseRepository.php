<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as Application;
use Illuminate\Support\Collection;
use Exception;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    protected $app;

    public function __construct()
    {
        $this->app = new Application();
        $this->makeModel();
    }

    abstract public function model();

    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model) {
            throw new Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $model;
    }

    public function resetModel()
    {
        $this->makeModel();
    }

    public function newQuery()
    {
        return $this->model = $this->model->newQuery();
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    public function paginate($limit = null, $columns = ['*'])
    {
        $paginate = $this->model->paginate($limit, $columns);
        $this->makeModel();

        return $paginate;
    }

    public function lists($column, $key = null)
    {
        $lists = $this->model->pluck($column, $key);
        $this->makeModel();

        return $lists;
    }

    public function where($conditions, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            list($value, $operator) = [$operator, '='];
        }

        $this->where[] = [$conditions, $operator, $value];
        $this->model = $this->model->where($this->where);

        return $this;
    }

    public function whereIn($conditions, $value = null)
    {
        $this->model = $this->model->whereIn($conditions, $value);

        return $this;
    }

    public function orWhereIn($conditions, $value = null)
    {
        $this->orWhereIn[] = [$conditions, $value];
        $this->model = $this->model->orWhereIn($this->orWhereIn);

        return $this;
    }

    public function orWhere($conditions, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            list($value, $operator) = [$operator, '='];
        }

        $this->orWhere[] = [$conditions, $operator, $value];
        $this->model = $this->model->orWhere($this->orWhere);

        return $this;
    }

    public function create($inputs = [])
    {
        return $this->model->create($inputs);
    }

    public function firstOrCreate($value)
    {
        return $this->model->firstOrCreate($value);
    }

    public function insert($inputs = [])
    {
        return $this->newQuery()->insert($inputs);
    }

    public function delete($ids)
    {
        $ids = is_array($ids) ? $ids : [$ids];

        return $this->model->whereIn('id', $ids)->delete();
    }

    public function singleUpdate($id, $value)
    {
        $model = $this->model->findOrFail($id);

        if ($model) {
            $model->fill($value);
            $model->save();

            return $model;
        } else {
            throw new Exception(trans('messages.not_found_object'));
        }
    }

    public function multiUpdate($ids, $field, $value)
    {
        $ids = is_array($ids) ? $ids : [$ids];

        return $this->whereIn('id', $ids)->update($field, $value);
    }

    public function getModel()
    {
        return $this->makeModel();
    }

    public function get($column = ['*'])
    {
        $model = $this->model->get($column);
        $this->makeModel();

        return $model;
    }

    public function uploadImage($files, $path)
    {
        if (!$files || !head($files)) {
            return null;
        }

        $files = is_array($files) ? $files : [$files];
        $names = [];

        foreach ($files as $file) {
            $fileName = uniqid(rand(), true) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $fileName);
            $names[] = $fileName;
        }

        return $names;
    }
}
