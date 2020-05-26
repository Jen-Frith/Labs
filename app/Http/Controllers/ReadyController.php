<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Ready;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Redirect;



class ReadyController extends Controller
{
    public function index(){
        $ready=Ready::find(1);

        return view ('admin.ready.index', compact('ready'));
    }


    public function store(Request $request){

    
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:20',
        'sousTitre' => 'required',
      
        'linkVideo' => 'required',
        
        
        ]);
        
        if ($validator->fails()) {
            $messages= $validator->messages();
            return Redirect::back()->withErrors($messages)
            ->withInput($request->all());}
            
        $ready=new Ready();
            
        $ready->titre=request('title');
        $ready->sousTitre=request('sousTitre');

        $ready->linkVideo=request('linkVideo');

        $ready->save();
        return redirect()->route('home');
    }


    public function update(Request $request){
    
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:20',
            'sousTitre' => 'required',
          
            'linkVideo' => 'required',
            
            
            ]);
            
            if ($validator->fails()) {
                $messages= $validator->messages();
                return Redirect::back()->withErrors($messages)
                ->withInput($request->all());}
                
            $ready=Ready::find(1);
                
            $ready->titre=request('title');
            $ready->sousTitre=request('sousTitre');
    
            $ready->linkVideo=request('linkVideo');
    
            $ready->save();
            return redirect()->route('home');

}


}