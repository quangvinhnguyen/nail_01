<?php

namespace App\Http\Controllers\User;

use App\Repositories\Product\ProductRepositoryInterface;

class ProductController extends BaseController
{
    public function __construct(ProductRepositoryInterface $productRepository)
    {
    	parent::__construct($productRepository);
    }

    public function index()
    {
    	return $this->viewRender('pages.service', $this->repository->all());
    }
}
