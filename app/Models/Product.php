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
        if ($search_val) {
            $query = $query->where('name', 'like', '%' . $search_val . '%');
        }
        return $query;
    }
}
