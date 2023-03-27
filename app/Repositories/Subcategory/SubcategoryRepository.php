<?php

namespace App\Repositories\Subcategory;

use App\Repositories\BaseRepository;
use App\Models\Subcategory;

/**
 * Class Category.
 */
class SubcategoryRepository extends BaseRepository implements SubcategoryRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return Subcategory::class;
    }


}


