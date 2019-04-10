<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $email = $user['email'];
        $user = DB::table('ridersdb')->where('email', $email)->get();
        #var_dump($user);
        return view('user.profile')->with('user', $user[0]);
    }
}
