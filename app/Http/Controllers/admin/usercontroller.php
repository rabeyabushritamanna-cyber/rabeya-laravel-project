<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;

class usercontroller extends Controller
{
   public function all(){
      $allUser= User::orderBy('id')-> get();
    return view('admin.user.all', compact('allUser'));
   }

    public function add(){
    return view('admin.user.add');
   }

    public function view(){
    return view('admin.user.view');
   }

    public function edit(){
    return view('admin.user.edit');
   }
}
