<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
  public function index()
  {
    $users = User::orderBy('id', 'asc')->get();
    return view('users.users')->with('users', $users);  //
  }

  public function show($id)
  {
    $team = User::find($id);
    return view('users.show',compact('user'));
  }
}
