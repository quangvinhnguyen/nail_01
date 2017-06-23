<?php

namespace App\Repositories\Service;

use Illuminate\Support\Collection;

interface ServiceRepositoryInterface
{
	public function getAll();

	public function create($data);

	public function find($id);

	public function update($id, $data);

	public function delete($id);
}
