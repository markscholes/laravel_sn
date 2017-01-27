<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller{

  //sign up method
public function postSignUp(Request $request){
  $this->validate($request, [
    'email' => 'required|unique:users', //specify the rules that are in place for field 'email', the second email here is a rule and resticting submissions, ' | ' seperates each rule, second rule is that it must be unique entry : in the users table
    'first_name' => 'required|max:100', //max specifies the maximum number of characters required
    'last_name' => 'required|max:100',
    'password' => 'required|min: 4',
  ]);
  //one of laravel's predefined functions to help with security
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

  Auth::login($user);
  return redirect()->route('dashboard');
}

  //sign in menthod
  public function postSignIn(Request $request){
    $this->validate($request, [
      'email' => 'required',
      'password' => 'required',
    ]);
    if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
      return redirect()->route('dashboard');
    }
    return redirect()->back();
  }

public function getLogout(){
  Auth::logout();
  return redirect()->route('welcome');
}



}




 ?>
