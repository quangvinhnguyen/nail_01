<?php

namespace App\Repositories\Product;

interface ProductRepositoryInterface
{
	public function create($data);

    public function update($id, $data);

    public function delete($id);
}
