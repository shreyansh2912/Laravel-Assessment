<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('registration');
    }

    public function login(){
        return view('login');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function validate_login(Request $request)
    {
        $request->validate(['email'=>'required','password'=>'required']);
        $creential = $request->only('email','password','roll_as');

        if(Auth::attempt($creential)){
            // return ('Login Success');
            if(auth::user()->roll_as == 1)
            {
                return("Admin panel");
            }
            else
            {
                return view('/home');
            }
        }
        else{
            return ('Login Denied');
        }
    }

    public function store(Request $request ,User $user)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return view('home');
    }

    /**
     * Display the specified resource.
     */
    public function show( $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $cr)
    {
        //
    }
}
