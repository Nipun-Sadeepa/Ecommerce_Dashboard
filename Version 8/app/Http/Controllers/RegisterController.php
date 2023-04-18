<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    // print('Hi welcomes');
    return "welcome & you are in get method";
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input();
        $user= new Register;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->hashedPassword=Hash::make($request->password);
        $user->save();
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }

    public function login(Request $req){
        // return $req->all();
        $user=Register::where([ ['name',$req->name] , ['password',$req->password] ])->first();
        if(isset($user)){
            return $user;
        }else{
            return response("user not found",401);
        }
    }

    public function checkAuth()
    {
       print ("directed"); echo "<br/>";

       $routeName = 'oauth/token';
       if (Route::has($routeName)) {
        print("Route is available");
    } else {
        print("Route is not available");
    }
    }
}
