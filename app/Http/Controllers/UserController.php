<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{


public function index(){
 $users=User::all()   ;

return view('admin/users/index', compact('users'));

}

public function create(){

    dd('register');
}


public function edit(){

    dd('edit');
}


public function destroy(){

    dd('delete');
}


public function profile(){

return view ('profile', array('user'=>Auth::user()));

}


public function updateAvatar(Request $request){
    $user = User::find(Auth::user()->id);

if($request->hasFile('avatar')){
    $avatar=$request->file('avatar');
    $filename=time() . '.' .$avatar->getClientOriginalExtension();
    
    if ($avatar != null && Auth::user()->avatar!=('img/avatar/default-profile-pic.jpg')) {
        $file =($user->avatar);
        // $file = (public_path('storage/avatars/'.$filename));
        //$destinationPath = 'uploads/' . $id . '/';
        // unlink(storage_path('app/folder/'.$file));
        //  dd($file);
        
        unlink($file);
        
        
    }

    Image::make($avatar)
    ->resize(300,300)
    ->save(public_path('img/avatar/'.$filename));


$user=Auth::user();
$user->avatar=('img/avatar/'.$filename);
$user->save();
return redirect()->back();
}
}

}
