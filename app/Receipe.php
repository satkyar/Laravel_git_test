<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use App\Mail\ReceipeStored;
use Illuminate\Support\Facades\Mail;

class Receipe extends Model
{
    protected $fillable = ['name','ingredients','category','user_id'];

    protected static function boot(){
    	parent::boot();

    	Static::created(function($receipe){
    		session()->flash('message','Receipe has created successfully!');
        	Mail::to('sattkyar86@gmail.com')->send(new ReceipeStored($receipe));
    	});
    }

    public function categorys(){
        return $this->belongsTo(Category::class,'category');
    }
}
