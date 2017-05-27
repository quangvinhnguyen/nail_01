<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductController extends Controller
{
	protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
    	parent::__construct();
    	$this->productRepository = $productRepository;
    }

    public function index()
    {
    	$products = $this->productRepository->all();

    	return view('users.pages.service', compact('products'));
    }
}
