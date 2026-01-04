<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\banner;

class bannercontroller extends Controller
{
    public function all(){
        $bandata = banner::orderBy('ban_id', 'DESC')->get();
        return view('admin.banner.all', compact('bandata'));
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

   public function insert(Request $request){
        $insert = banner::insert([
            'ban_title' => $request['title'],
            'ban_subtitle' => $request['subtitle'],
            'ban_btn' => $request['button'],
            'ban_url' => $request['url'],
            'created_at' => Carbon::now(),]);

        if ($insert) {
        return redirect()->route('banner.all');
        } else {
        return redirect()->route('banner.add');}
    }

}

