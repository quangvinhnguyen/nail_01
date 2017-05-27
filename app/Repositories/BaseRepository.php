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

    public function paginate($limit = null, $columns = ['*'])
    {
        $limit = is_null($limit) ? config('settings.paginate_limit') : $limit;

        return $this->model->paginate($limit, $columns);
    }

    public function lists($column, $key = null)
    {
        return $this->model->pluck($column, $key);
    }

    public function where($conditions, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            list($value, $operator) = [$operator, '='];
        }

        $this->where[] = [$conditions, $operator, $value];

        return $this;
    }

    public function whereIn($conditions, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            list($value, $operator) = [$operator, '='];
        }

        $this->newQuery()->whereIn[] = [$conditions, $operator, $value];

        return $this;
    }

    public function orWhereIn($conditions, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            list($value, $operator) = [$operator, '='];
        }

        $this->newQuery()->orWhereIn[] = [$conditions, $operator, $value];

        return $this;
    }

    public function orWhere($conditions, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            list($value, $operator) = [$operator, '='];
        }

        $this->orWhere[] = [$conditions, $operator, $value];

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
            $model->fill($input);
            $model->save();

            return $this;
        } else {
            throw new Exception(trans('messages.not_found_object'));
        }
    }

    public function multiUpdate($ids, $field, $value)
    {
        $ids = is_array($ids) ? $ids : [$ids];

        return $this->whereIn('id', $ids)->update($field, $value);
    }
}
