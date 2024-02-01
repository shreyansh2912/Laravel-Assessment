<?php

namespace App\Http\Controllers;

use App\Models\rc;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin-dashborad',compact('users'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(rc $rc)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rc $rc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rc $rc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rc $rc)
    {
        //
    }
}
