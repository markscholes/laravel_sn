<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller{

  public function getDashboard(){
    return view('dashboard');
  }
  //sign up method
public function postSignUp(Request $request){
  $email = $request['email'];
  $password = bcrypt($request['password']);
  $first_name = $request['first_name'];
  $last_name = $request['last_name'];

  $user = new User();
  $user->email = $email;
  $user->password = $password;
  $user->first_name = $first_name;
  $user->last_name = $last_name;

  $user->save();

  return redirect()->route('dashboard');
}

  //sign in menthod
  public function postSignIn(Request $request){
    if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
      return redirect()->route('dashboard');
    }
    return redirect()->back();
  }
}




 ?>
