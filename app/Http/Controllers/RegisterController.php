<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

class RegisterController extends Controller
{
    public function create() {
        return view('signup.create');
    }

    public function store() {
        // return request()->all();
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:6|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);
        
        $user = User::create($attributes);

        // log the user in
        auth()->login($user);

        // seesion()->flash('success', 'Your account has been created');
        return redirect('/')->with('success', 'Your account has been created');
        // dd('successfully validated'); Illuminate/Support/Facades
    }
}
