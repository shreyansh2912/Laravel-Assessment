<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

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
        $crdential = $request->only('email','password','roll_as');

        if(Auth::attempt($crdential)){
            // return ('Login Success');
            if(auth::users()->roll_as == 1)
            {
                return redirect('admin-dashboard');
            }
            else
            {
                return view('/home');
            }
        }
        else{
            echo "<script> alert('Wrong password or email');</script>";
            return view('/login');
        }
    }

    public function store(Request $request ,User $user)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'Confirm_password'=>'required|same:password'
        ]);
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
