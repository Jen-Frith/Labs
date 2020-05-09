<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Presentation;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Redirect;



class PresentationController extends Controller
{
    public function index(){
        $presentation=presentation::find(1);

        return view ('admin.presentation.index', compact('presentation'));
    }


    public function store(Request $request){

    
    $validator = Validator::make($request->all(), [
        'title' => 'required|alpha|max:20',
        'paragraph1' => 'required',
        'paragraph2' => 'required',
        'linkText' => 'required|max:10',
        'linkVideo' => 'required|url',
        
        
        ]);
        
        if ($validator->fails()) {
            $messages= $validator->messages();
            return Redirect::back()->withErrors($messages)
            ->withInput($request->all());}
            
        $presentation=new Presentation();
            
        $presentation->title=request('title');
        $presentation->paragraph1=request('paragraph1');
        $presentation->paragraph2=request('paragraph2');
        $presentation->linkText=request('linkText');
        $presentation->linkVideo=request('linkVideo');

        $presentation->save();
        return redirect()->route('home');
    }


    public function update(Request $request){
    
        $validator = Validator::make($request->all(), [
            'title' => 'required|alpha|max:20',
            'paragraph1' => 'required',
            'paragraph2' => 'required',
            'linkText' => 'required|max:10',
            'linkVideo' => 'required|url',
            
            
            ]);
            
            if ($validator->fails()) {
                $messages= $validator->messages();
                return Redirect::back()->withErrors($messages)
                ->withInput($request->all());}
                
            $presentation=Presentation::find(1);
                
            $presentation->title=request('title');
            $presentation->paragraph1=request('paragraph1');
            $presentation->paragraph2=request('paragraph2');
            $presentation->linkText=request('linkText');
            $presentation->linkVideo=request('linkVideo');
    
            $presentation->save();
            return redirect()->route('home');

}


}