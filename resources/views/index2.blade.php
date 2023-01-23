<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
         <script
          src="https://code.jquery.com/jquery-3.6.3.min.js"
          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
          crossorigin="anonymous">
        </script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



                  <!--  index2.js files -->
       <script src="{{url('js/index2.js')}}"></script>
       <style>
         
     
       #tab{
       width:83% !important;
       height:1155px;
       padding-left: 20px;

     } 
     table{
       margin:2px 20px 0px 20px;
     }
     .btn2{
      color:white;
     }
     table{
      margin: 10px 10px 10px 10x;
     }
     .border{
        padding-left: 20px;

     } </style>

       <title>Laravel</title>
</head>

<body>

   
    <button style="background: #337ab7;margin-left: 40px;height:40px"><a href="http://localhost/newproject/blog/public/studentdata" style="color: white !important">Add-data</a></button>

 <div class="table-responsive " id="tab">                                                                                                                                                                                                                                                                                                                                                          
      <table class="table table-striped table-hover  border"  >
         <thead style="background: pink">
           <tr>
            <th><strong>Id</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>Age</strong></th>
            <th><strong>Gender</strong></th>
            <th><strong>Assress</strong></th>
            <th>Action</th>
          </tr>
         </thead>
         <tbody>
             @foreach($show2 as $show3)
              <tr style="border:1px solid black">
               <td>{{$show3->id}}</td>
               <td>{{$show3->name}}</td>
               <td>{{$show3->age}}</td>
               <td>{{$show3->gender}}</td>
               <td>{{$show3->Address}}</td>
               <td><a href="{{url('studenteditdata/'.$show3->id)}}" class="btn btn-danger  btn3"  id="edit">Edit</a>
                   <a href="{{url('delete/'.$show3->id)}}" class="btn btn-success btn2"  id="delete">Delete</a>
               </td>      
              </tr>
             @endforeach
         </tbody>
      </table>
</div>

</body>
</html>
