<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required|min:4',
            'email'=>'required|email',
            'password'=>'required|min:6|max:8'
        ]);
        if(User::where("email",$request->email)->first()){
            return response([
                'message' => 'Email already exists',
                'status' => 'failed'
            ],200);
        }
        if(User::where("username",$request->username)->first()){
            return response([
                'message' => 'username already exists',
                'status' => 'failed'
            ],200);
        }
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
            'roll_as' => $request->roll_as
        ]);
        // session_start();
        // session['email']=>
        return redirect('home');
    }

    public function login_validation(Request $request,User $user){
        $request -> validate([
            'email'=>"required|email",
            'password'=>'required'
        ]);
        $crdential = $request->only('email','password','roll_as');
        // $user = User::where("email",$request->email)->first();
        // if($user && Hash::check($request->password,$user->password)){
            if(Auth::attempt($crdential)){
                if(Auth::user()->roll_as == 0){
                    return redirect('home');
                }else if(Auth::user()->roll_as == 1){
                    return redirect('Author/dashboard');
                }else if(Auth::user()->roll_as == 2){
                    return redirect('admin/dashboard');
                }
            }else{
                echo "<script>alert('Email_id and Password are wrong')</script>";
                return view('login');
            }
        // }
        // else{
            // echo "<script>alert('Email_id and Password are wrong')</script>";
            // return view('login');
        // }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function logout(){
        Auth::logout();
        session()->flush();
        return redirect('login');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
