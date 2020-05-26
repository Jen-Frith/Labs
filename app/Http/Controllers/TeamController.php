<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Team;
class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $teams=Team::all();
        return view('admin/team/index', compact('teams'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $teams=Team::all();

    
        if (count($teams)>2) {  
            return redirect()->back()->with('alert', 'Vous en avez déjà 3!');      
          }
        
          else{
              return view('admin.team.create', compact('teams'));
          }  

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
            'name' => 'required|alpha|max:25',
            'function' => 'required|alpha|max:25',
            'title' => 'required|max:100',

            ]);
            
            if ($validator->fails()) {
                $messages= $validator->messages();
                return Redirect::back()->withErrors($messages)
                ->withInput($request->all());}

                $team=new Team();

                $team->img=request('img')->store('img');
                $team->name=request('name');
                $team->function=request('function');
                $team->title=request('title');
                
           $team->save();
           return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('hi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $team=Team::find($id);


        return view('admin.team.edit', compact('team'));
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
            'img' => 'nullable|image',
            'name' => 'required|alpha|max:25',
            'function' => 'required|alpha|max:25',
            'title' => 'required|max:100',

            ]);
            
            if ($validator->fails()) {
                $messages= $validator->messages();
                return Redirect::back()->withErrors($messages)
                ->withInput($request->all());}

                $team=Team::find($id);

                
                $team->name=request('name');
                $team->function=request('function');
                $team->title=request('title');
                
           $team->save();
           return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team=Team::find($id);
        Storage::delete($team->img);

        $team->delete();
        return redirect()->route('team.index');

    }
}
