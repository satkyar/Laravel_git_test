<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
    	return view("home",[    		
	    	"name" => "Home Page Template"	    
    	]);
    }

    public function phppage(){
    	return view('php',[
	    	'data' => array(
	    		'lesson1' => "lesson1 php data",
	    		'lesson2' => "lesson2 php data",
	    		'lesson3' => "lesson3 php data"
	    	)
    	]);
    }

    public function jspage(){
    	return view('js',[
	    	'data' => array(
	    		'lesson1' => "lesson1 js data",
	    		'lesson2' => "lesson2 js data",
	    		'lesson3' => "lesson3 js data"
	    	)
    	]);
    }
}
