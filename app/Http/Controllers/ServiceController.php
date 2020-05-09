<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use  Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use App\Service;
class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$services= DB::table('service')->paginate(5);

        // $services=Service::all();


        return view('admin/services/index', ['data'=>$services], compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'title' => 'required|alpha|max:15',
            'description' => 'required',
            'icon' => 'required',

            ]);
            
            // dd($validator);
            if ($validator->fails()) {
                $messages= $validator->messages();
                return Redirect::back()->withErrors($messages)
                ->withInput($request->all());}
                $service=new Service();

                $service->icon=request('icon');
                $service->title=request('title');
                $service->description=request('description');
                
           $service->save();
           return redirect()->route('services.index');
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

        $service=Service::find($id);


        return view('admin.services.edit', compact('service'));
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
            'title' => 'required|alpha|max:15',
            'description' => 'required',
            'icon' => 'required',

            ]);
            
            // dd($validator);
            if ($validator->fails()) {
                $messages= $validator->messages();
                return Redirect::back()->withErrors($messages)
                ->withInput($request->all());}
                $service=Service::find($id);

                $service->icon=request('icon');
                $service->title=request('title');
                $service->description=request('description');
                
           $service->save();
           return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Service::find($id);

        $service->delete();
        return redirect()->route('services.index');

    }
}
