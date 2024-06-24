<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        // return $users->toArray();

        return view('User.index', compact('users'));
    }
    
    public function create()
    {
        return view('User.create');
    }

    public function store(Request $request)
    {       
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        
        return redirect()->route('User.index');
    }

    public function show($id)
    {
        $users = User::find($id);
        return view('User.show', compact('users'));
    }

    public function edit(Request $request,$id){

        $user = User::find($id);
        return view('User.edit', compact('user'));
        
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        return redirect()->route('User.show', [$id])->with('mensaje', 'Usuario actualizado correctamente');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('User.index', compact('users'))->with('mensaje', 'Usuario Eliminado correctamente');
    }
}

