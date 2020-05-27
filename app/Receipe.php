<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    protected $fillable = ['name','ingredients','category','user_id'];

    public function categorys(){
        return $this->belongsTo(Category::class,'category');
    }
}
