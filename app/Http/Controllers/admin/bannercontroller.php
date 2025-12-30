<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\banner;

class bannercontroller extends Controller
{
    public function all(){
    return view('admin.banner.all' );
   }

    public function add(){
    return view('admin.banner.add');
   }

    public function view(){
    return view('admin.banner.view');
   }

    public function edit(){
    return view('admin.banner.edit');
   }
}
