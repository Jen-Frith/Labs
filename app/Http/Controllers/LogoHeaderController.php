<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogoHeader;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class LogoHeaderController extends Controller
{
    public function index(){
        $logoHeader=LogoHeader::find(1);

        return view ('admin.logoHeader.index', compact('logoHeader'));
    }


    public function store(Request $request){

     $request->validate([
         'logoHeader'=>'required| image'
     ]);
        
        $logoHeader=new LogoHeader();
        
        $validator = Validator::make($request->all(), [
            'logoHeader' => 'required|image|max:255',
        ]);
        
        if ($validator->fails()) {
            $messages= $validator->messages();
            return Redirect::back()->withErrors($messages)
            ->withInput($request->all());}
        $logoHeader->logoHeader=request('logoHeader')->store('img');

        $logoHeader->save();
        return redirect()->route('home');
    }


    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'logoHeader' => 'required|image|max:255',
        ]);
        
        if ($validator->fails()) {
            $messages= $validator->messages();
            return Redirect::back()->withErrors($messages)
            ->withInput($request->all());}
            

        // $request->validate([
        //     'logoHeader'=>'required|image'
        // ]);

        $logoHeader=LogoHeader::find(1);
        if($logoHeader!=null){
            Storage::delete($logoHeader->logoHeader);
        $logoHeader->logoHeader=request('logoHeader')->store('img');
    }

        $logoHeader->save();
        return redirect()->route('home');
    }

}
