<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;

class employeecontroller extends Controller
{
     public function saveemp(Request $req)
{
    
    $req->validate(employee::$createRules);
   

  $employee = new employee;
/* $req->validate([
        'name' => 'required|min:3|max:255',
        'password' => 'required',
    ]);

*/  
          /*model validations*/
     /* $file = null;
      if($req->hasfile('Addfile'))
      {
        $file = $req -> file('Addfile')->storeAs(
             'img',
            employee::id() . '.' . $req->file('Addfile')->getClientOriginalExtension(),
             'public'
        );
      }*/

/* if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('img', $fileName, 'public');
            $employee->name = time().'_'.$req->file->getClientOriginalName();
            $employee->file_path = '/storage/' . $filePath;
            $employee->RequestType = $req->RequestType;
    $employee->RequestDetails = $req->RequestDetails;
   /*  $employee->AddFile = $req->AddFile;*/
            /*$employee->save();
        }*/

/* $employee = uniqid() . $req->get('AddFile')->getClientOriginalName() . '.' . $req->get('AddFile')->getClientOriginalExtension();

   $request->get('AddFile')->move(public_path('files') . $employee);
*/
   /*if($req->has('Addfile')) {
            $image = $request->file('Addfile');
            $filename = $image->getClientOriginalName();
            req()->$image->move(public_path('public/users'), $filename);
            $sounds->image = $req->file('Addfile')->getClientOriginalName();
        }*/

/*      if($file = $req->AddFile){

$name= $file->getClientOriginalName();
if($file->move('img',$name)){
     $employee = new employee;

 $employee->RequestType = $req->RequestType;
    $employee->RequestDetails = $req->RequestDetails;
     $employee->img = $name;
 $employee->save();
  return redirect('http://localhost/newproject/blog/public/index4');
   
  }
  }     
     */      /*model validations*/



   
  /*  $employee->AddFile = $req->AddFile;*/
   
 

 $employee->RequestType = $req->RequestType;
    $employee->RequestDetails = $req->RequestDetails;
     $employee->AddFile =     $req->AddFile;
 $employee->save();
  return redirect('http://localhost/newproject/blog/public/index4');

}
public function index4()
{ 
    $employee = employee::all();
    return view('index4',['employee'=>$employee]);
    /*  return redirect('http://localhost/newproject/blog/public/grid');*/
}
public function navi()
{
    $show = show::get();

    return view('nav', ['show' => $show]);    
}

}
