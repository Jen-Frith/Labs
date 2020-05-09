<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Testimonial;
class testimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $testimonials=Testimonial::all();
        return view('admin/testimonial/index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'imgtestimonial' => 'required|image|max:1000',
            'name' => 'required|alpha|max:25',
            'function' => 'required|alpha|max:15',
            'message' => 'required|max:100',

            ]);
            
            if ($validator->fails()) {
                $messages= $validator->messages();
                return Redirect::back()->withErrors($messages)
                ->withInput($request->all());}

                $testimonial=new Testimonial();

                $testimonial->img=request('imgtestimonial')->store('img');
                $testimonial->name=request('name');
                $testimonial->function=request('function');
                $testimonial->message=request('message');
                
           $testimonial->save();
           return redirect()->route('testimonial.index');
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

        $testimonial=Testimonial::find($id);


        return view('admin.testimonial.edit', compact('testimonial'));
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
            'imgtestimonial' => 'required|image|max:1000',
            'name' => 'required|alpha|max:25',
            'function' => 'required|alpha|max:15',
            'message' => 'required|max:100',

            ]);
            
            if ($validator->fails()) {
                $messages= $validator->messages();
                return Redirect::back()->withErrors($messages)
                ->withInput($request->all());}

                $testimonial=Testimonial::find($id);

                if($testimonial!=null){
                    Storage::delete($testimonial->img);
                }
                $testimonial->img=request('imgtestimonial')->store('img');
                $testimonial->name=request('name');
                $testimonial->function=request('function');
                $testimonial->message=request('message');
                
           $testimonial->save();
           return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial=Testimonial::find($id);
        Storage::delete($testimonial->img);

        $testimonial->delete();
        return redirect()->route('testimonial.index');

    }
}
