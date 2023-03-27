<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
    public function subcategory() {
        return $this->belongsTo('App\Models\Subcategory');
    }
    public function brand() {
        return $this->belongsTo('App\Models\Brand');
    }
    public function colors() {
        return $this->belongsToMany('App\Models\Color', 'product_color');
    }
}
