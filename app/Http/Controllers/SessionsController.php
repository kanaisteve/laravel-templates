<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create() {
        return view('sessions.create');
    }

    public function store(){
        /**
         * 1. validate the request.
         * 2. attempt to authenticate and login the user based on the provided credentials.
         * 3. redirect with a success flash message.
         */
        $attributes = request()->validate([
            // 'email' => 'required|exists:users,email',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)){
            // session fixation
            session()->regenerate();
            return redirect('/')->with('success','Welcome back!');
        }

        //auth failed
        return back()
            ->withInput()
            ->withErrors('email', 'Your provided credentials could not be verified.');

        // another way of failed auth
        // throw ValidationException::withMessage([
        //     'email' => 'Your provided credentials could not be verified.'
        // ]);
    }

    public function destroy() {
        auth()->logout();
        return redirect('/')->with('success','Goodbye!');
    }
}
