<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function manageUser(){
        //$users=User::all();
        $users=User::paginate(1);
        return view('admin.user.manageUser',['users'=>$users]);
    }
    public function createUser()
    {
        return view('admin.user.createUser');
    }
    public function storeUser(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'password'=>'required'
        ]);
        
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->password = $request->password;
        $users->save();
        return redirect('/user/add')->with('message','User info save successfully');
        
    }
}
