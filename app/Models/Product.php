<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status', 'price', 'sale_price', 'image', 'category_id'];
    public function scopeSearch($query)
    {
        $search_val = request()->search;
        $cat_id = request()->cat_id;
        if ($search_val) {
            $query = $query->where('name', 'like', '%' . $search_val . '%');
        }
        if ($cat_id) {
            $query = $query->where('category_id', $cat_id);
        }
        return $query;
    }
    public function cat()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
