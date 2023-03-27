<?php

namespace App\Repositories\Product;

use App\Repositories\BaseRepository;
use App\Models\Product;

/**
 * Class Product.
 */
class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return Product::class;
    }


}


