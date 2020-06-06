<?php

namespace App\Http\Controllers;

use App\Receipe;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
    	$receipe = Receipe::paginate(9);
    	return view('user_view.welcome',compact('receipe'));
    }

    public function show(Receipe $detail){
    	return view('user_view.detail',['receipe'=>$detail]);
    }
}
