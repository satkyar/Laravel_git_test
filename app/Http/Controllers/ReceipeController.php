<?php

namespace App\Http\Controllers;

use App\Category;
use App\Events\ReceipeCreatedEvent;
use App\Mail\ReceipeStored;
use App\Notifications\ReceipeShowNotification;
use App\Receipe;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReceipeController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){            
        if (auth()->user()->isSuperUser()) {
            $data = Receipe::paginate(9);
        }    
        else{
            $data = Receipe::where('user_id',auth()->id())->get();    
        }
        return view('rec_home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $category = Category::all();        
        return view('rec_create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $receipe = Receipe::create($this->validateTo($request) + ['user_id' => auth()->id()]);   
        // auth()->user()->notify(new ReceipeShowNotification());
        // event(new ReceipeCreatedEvent($receipe));     
        return redirect("receipe");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function show(Receipe $receipe){
        $this->authorize('view',$receipe);
        return view('rec_show',compact('receipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipe $receipe){    
        $this->authorize('view',$receipe);    
        $category = Category::all();
        return view('rec_edit',compact('receipe','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receipe $receipe){
        $receipe->Update($this->validateTo($request));
        return redirect("receipe");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipe $receipe){
        $this->authorize('view',$receipe);
        $receipe->delete();
        return redirect("receipe");
    }

    private function validateTo(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'category' => 'required'
        ]);
        return $validatedData;
    }
}
