<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{
    public function index(){
        $link=Link::find(1);
        return view ('admin.link.index', compact('link'));
    }


    public function store(Request $request){
        $link=new Link();

       $link->linkTitle1=request('linkTitle1');
       $link->linkTitle2=request('linkTitle2');
       $link->linkTitle3=request('linkTitle3');
       $link->linkTitle4=request('linkTitle4');

       $link->save();
       return redirect()->route('home');
    }



    public function update(){
        $link=Link::find(1);

       $link->linkTitle1=request('linkTitle1');
       $link->linkTitle2=request('linkTitle2');
       $link->linkTitle3=request('linkTitle3');
       $link->linkTitle4=request('linkTitle4');

       $link->save();
       return redirect()->route('home');
    }



}
