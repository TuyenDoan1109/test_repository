<?php

namespace App\Repositories\Admin;

use App\Repositories\BaseRepository;
use App\Models\Admin;

/**
 * Class Category.
 */
class AdminRepository extends BaseRepository implements AdminRepositoryInterface
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return Admin::class;
    }

}


