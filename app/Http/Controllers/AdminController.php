<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Advertisment;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin')->with('users',$users);
    }
    public function destroy($id)
    {

        /*$advertisment=Advertisment::where('user_id',$id)->first();

        Storage::delete('public/advertisment_image/' . $advertisment->photo);

        $advertisment->delete();*/


        $user= User::find($id);

        $advertisments = $user->advertisments;
        foreach($advertisments as $advertisment)
        {
            Storage::delete('public/advertisment_image/' . $advertisment->photo);
            $advertisment->delete();
        }

        $user->delete();
        //redirect
        return redirect('admin')->with('success', 'User DELETED SUCCESSEFULY');


    }
}
