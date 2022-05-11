<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status'];
    public function scopeSearch($query)
    {
        $search_val = request()->search;
        if ($search_val) {
            $query = $query->where('name', 'like', '%' . $search_val . '%');
        }
        return $query;
    }
    public function product(){
        return $this->hasMany(Product::class,'category_id', 'id');
    }
}
