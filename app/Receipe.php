<?php

namespace App;

use App\Category;
use App\Events\ReceipeCreatedEvent;
use App\Events\ReceipeUpdatedEvent;
use App\Mail\ReceipeStored;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Receipe extends Model
{
    protected $fillable = ['name','ingredients','category','user_id'];

    Public $dispatchesEvents = [
        'created' => ReceipeCreatedEvent::class,
        'updated' => ReceipeUpdatedEvent::class
    ];

    protected static function boot(){
    	parent::boot();

    	Static::created(function($receipe){
    		session()->flash('message','Receipe has created successfully!');        	
    	});

        Static::Updated(function($receipe){
            session()->flash('message','Receipe has updated successfully!');            
        });

        Static::Deleted(function($receipe){
            session()->flash('message','Receipe has deleted successfully!');            
        });
    }

    public function categorys(){
        return $this->belongsTo(Category::class,'category');
    }
}
