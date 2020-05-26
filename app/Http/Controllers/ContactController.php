<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\Facades\Redirect;



class ContactController extends Controller
{
    public function index(){
        $contact=Contact::find(1);

        return view ('admin.contact.index', compact('contact'));
    }


    public function store(Request $request){

    
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:20',
        'description' => 'required',
        'adress' => 'required',
        'street' => 'required',
        'tel' => 'required|numeric|',
        'mail' => 'required|email',
        'contentButton' => 'required|max:15',      
        
        ]);
        if ($validator->fails()) {
            $messages= $validator->messages();
            dd($messages);
            return Redirect::back()->withErrors($messages)
            ->withInput($request->all());}
            
        $contact=new Contact();
            
        $contact->titleSection=request('title');
        $contact->description=request('description');
        $contact->adress=request('adress');
        $contact->street=request('street');
        $contact->tel=request('tel');
        $contact->mail=request('mail');
        $contact->contentButton=request('contentButton');


        $contact->save();
        return redirect()->route('home');
    }


    public function update(Request $request){
    
          
    $validator = Validator::make($request->all(), [
        'title' => 'required|max:20',
        'description' => 'required',
        'adress' => 'required',
        'street' => 'required',
        'tel' => 'required|numeric|',
        'mail' => 'required|email',
        'contentButton' => 'required|max:15',      
        
        ]);
        if ($validator->fails()) {
            $messages= $validator->messages();
            dd($messages);
            return Redirect::back()->withErrors($messages)
            ->withInput($request->all());}
            
        $contact=Contact::find(1);
            
        $contact->titleSection=request('title');
        $contact->description=request('description');
        $contact->adress=request('adress');
        $contact->street=request('street');
        $contact->tel=request('tel');
        $contact->mail=request('mail');
        $contact->contentButton=request('contentButton');


        $contact->save();
        return redirect()->route('home');

}


}