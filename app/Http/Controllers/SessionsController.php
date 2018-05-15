<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __constructor()
    {
        $this->middleware('guest',['except' => 'destroy']);
    }

    public function create()
    {
        return view('login');
    }

    public function store()
    {
        if(!auth()->attempt(request(['email','password']))) {
            return back();
        }
        return redirect()->route('index');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->route('index');
    }
}
