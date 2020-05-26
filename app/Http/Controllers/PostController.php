<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts=Post::all();
        return view ('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'img' => 'required|image',
            'title' => 'required|max:20',
            'message' => 'required',
            'function' => 'required',
            'tag' => 'required|',
     
            
            ]);
            if ($validator->fails()) {
                $messages= $validator->messages();
                // dd($messages);
                return Redirect::back()->withErrors($messages)
                ->withInput($request->all());}
                
            $post=new Post();
                
            $post->img=request('img')->store('img');
            $post->tag=request('tag');
            $post->function=request('function');
            $post->message=request('message');
            $post->title=request('title');

    
    
            $post->save();
            return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'img' => 'required|image',
            'title' => 'required|max:20',
            'message' => 'required',
            'function' => 'required',
            'tag' => 'required|',
     
            
            ]);
            if ($validator->fails()) {
                $messages= $validator->messages();
                // dd($messages);
                return Redirect::back()->withErrors($messages)
                ->withInput($request->all());}
                
            $post=Post::find($id);
                
            $post->img=request('img')->store('img');
            $post->tag=request('tag');
            $post->function=request('function');
            $post->message=request('message');
            $post->title=request('title');

    
    
            $post->save();
            return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();

        return redirect()->back();
    }
}
