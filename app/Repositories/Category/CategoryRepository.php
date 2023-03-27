<?php

namespace App\Repositories\Category;

use App\Repositories\BaseRepository;
use App\Models\Category;

/**
 * Class Category.
 */
class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return Category::class;
    }


}


