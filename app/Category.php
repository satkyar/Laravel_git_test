<?php

namespace App;

use App\Receipe;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name','desc'];

    protected $table = "category";

    protected static function boot(){
    	parent::boot();

    	Static::created(function($category){
    		session()->flash('message','Category has created successfully!');        	
    	});

        Static::Updated(function($category){
            session()->flash('message','Category has updated successfully!');            
        });

        Static::Deleted(function($category){
            session()->flash('message','Category has deleted successfully!');            
        });
    }

    public function receipe(){
        return $this->hasMany(Receipe::class);
    }
}
