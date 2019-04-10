<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function getForm(){
      return view('register');
    }
    public function addRider(Request $request){
      if (empty($request)) {
        return view('register');
      }
      $fname = $request->input('fname');
      $lname = $request->input('lname');
      $origin = $request->input('origin');
      $dest = $request->input('dest');
      $ddate = $request->input('ddate');
      $dtime = $request->input('dtime');
      $hascar = $request->input('hascar');
      $seats = $request->input('seats');
      if(empty($seats)) $seats=0;
      $pass = $request->input('pass');
      $email = $request->input('email');
      $team = $request->input('team');

      DB::insert(
        'insert into ridersdb (fname, lname, origin, dest, ddate, dtime, hascar, seats, pass, email, team) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
        [$fname, $lname, $origin, $dest, $ddate, $dtime, $hascar, $seats, $pass, $email, $team]);

      #$user = User::create(request(['fname', 'email', 'password']));
      #auth()->login($user);
      return view('welcome');

    }
}
