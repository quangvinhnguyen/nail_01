<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use DB;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function model()
    {
        return Product::class;
    }

    public function create($data = [])
    {
        if (!$data) {
            throw new Exception('Inputs is empty');
        }

        $inputs = array_except($data, ['nameimgs']);
        $product = parent::create($inputs);
        $imgs = [];

        foreach ($data['nameimgs'] as $img) {
            $imgs[] = [
                'url' => $img,
            ];
        }

        $product->images()->createMany($imgs);

        return $product;
    }
    
    public function update($id,$data = [])
    {
        DB::beginTransaction();
        try {
            $service = $this->singleUpdate($id,$data);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            // Log::error($e);
            throw new Exception($e);
        }

        return $service;
    }
    
    public function delete($id)
    {  
        DB::beginTransaction();
        try {
            $service = parent::delete($id);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            // Log::error($e);
            throw new Exception($e);
        }

        return $service;
    }
}
