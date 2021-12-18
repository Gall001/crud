<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index')->with('user' , User::all());
    }

    public function destroy(User $user){
        $user -> delete();
        return redirect('/user');
    }

    public function edit(User $user){
        return view('users.edit', ['user' => $user]);
    }

    public function update(User $user){

        request()->validate([
            'name' => 'required|min:5|string|max:255',
            'email'=>'required|email|string|max:255',
            'password' => 'required|min:8',
        ]);

        $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password')
        ]);

        return redirect('/user');
    }

    public function detail(User $user){
        return view('users.detail', ['user' => $user]);
    }

}
