<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\show;

class showcontroller extends Controller
{
    public function save(Request $req)
{ //dd($req->name);
    $show = new show;

 $req->validate([
        'name' => 'required|min:3|max:255',
        'password' => 'required',
    ]);

    $show->name = $req->name;
    $show->password = $req->password;
    $show->save();
    return redirect('edit');

}
 public function index()
{ 
    $show = show::all();
    return view('index1',['show'=>$show]);
}

}
