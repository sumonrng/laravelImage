<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('welcome',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        // $file = $request->file('photo');
        $path = $request->file('photo')->store('images','public');
        User::create([
            'user_name'=>$request->user_name,
            'f_name'=>$request->f_name,
            'email'=>$request->email,
            'city'=>$request->city,
            'photo'=>$request->photo,
            'country'=>$request->country,
            'salary'=>$request->salary,
            'dob'=>$request->dob,
            'password'=>$request->password,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        return redirect()->route('user.index')->with('status','Image Upload Successfully');
        
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
