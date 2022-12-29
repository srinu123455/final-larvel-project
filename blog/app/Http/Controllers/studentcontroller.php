<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sudent;

class studentcontroller extends Controller
{
        public function savestudentdata(Request $req)
{ //dd($req->name);
    $student = new sudent;

 $req->validate([
        'name' => 'required|min:3|max:255',
        'age' => 'required',
        'gender' => 'required',
        'Address' => 'required',
    ]);

    $student->name = $req->name;
    $student->age = $req->age;
       $student->gender = $req->gender;
          $student->Address = $req->Address;
    $student->save();
return redirect('index2');

}
public function index2(){
	 $show2 = sudent::all();
    return view('index2',['show2'=>$show2]);

}
public function studenteditdata($id){
	$student=sudent::find($id);
	return view('studenteditdata',compact('student'));

}
public function studentupdatedata(Request $req,$id){

$student=sudent::find($id);
$req->validate([
        'name' => 'required|min:3|max:255',
        'age' => 'required',
        'gender' => 'required',
        'Address' => 'required',
    ]);
    $student->name = $req->name;
    $student->age = $req->age;
       $student->gender = $req->gender;
          $student->Address = $req->Address;
    $student->update();
    return Redirect('http://localhost/newproject/blog/public/index2');
}
public function delete($id){
	$student=sudent::find($id);
	$student->delete();
	 return Redirect('http://localhost/newproject/blog/public/index2');
}
}