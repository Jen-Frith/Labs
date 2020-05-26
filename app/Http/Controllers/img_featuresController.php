<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class img_featuresController extends Controller
{
    public function index(){
        $feature=Feature::find(1);

        return view ('admin.imgFeatures.index', compact('feature'));
    }


    public function store(Request $request){

        
        
        $validator = Validator::make($request->all(), [
            'img' => 'required|image',
            ]);
            
            if ($validator->fails()) {
                $messages= $validator->messages();
                return Redirect::back()->withErrors($messages)
                ->withInput($request->all());}
      
      
                $feature=new Feature();
                $feature->img=request('img')->store('img');
                
        $feature->save();
        return redirect()->route('home');
    }


    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'img' => 'required|image',
        ]);
        
        if ($validator->fails()) {
            $messages= $validator->messages();
            return Redirect::back()->withErrors($messages)
            ->withInput($request->all());}
            

        // $request->validate([
        //     'feature'=>'required|image'
        // ]);

        $feature=Feature::find(1);
        if($feature!=null){
            Storage::delete($feature->img);
        $feature->img=request('img')->store('img');
    }

        $feature->save();
        return redirect()->route('home');
    }

}
