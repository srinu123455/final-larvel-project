<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


      <title>Laravel</title>
      <style>
        #table{
       margin-left: 20px;
       width:84% !important;
       height:1160px;
     }  
       table{
       margin:20px 20px 0px 20px;
     }    </style>
</head>
 <body>
  <div style="">
   @include('nav')
 </div>
      <button style="background: #337ab7;  color:white ; border:1px solid #cdcaca" ><a href="{{ url('http://localhost/newproject/blog/public/edit') }}" style=" color:white;height:40px; margin:10px 3px 3px 3px !important">Homepage</a></button>
      <button style="background: #337ab7; color:white ; border:1px solid #cdcaca" ><a href="{{ url('http://localhost/newproject/blog/public/create') }}" style=" height:40px; margin:4px 3px 3px 3px !important">add</a></button>
         <div class="table-responsive " id="table">
              <table class="table table-striped table-hover  "  >
                 <thead style="background: pink">
                     <tr>
                        <th><strong>id</strong></th>
                        <th><strong>name</strong></th>
                        <th><strong>password</strong></th>
       
                     </tr>
                 </thead>
                 <tbody>
                  @foreach($show as $show1)
                    <tr style="border:1px solid black">
                        <th>{{$show1->id}}</th>
                        <th>{{$show1->name}}</th>
                        <th>{{$show1->password}}</th>
      
                    </tr>
                  @endforeach
                 </tbody>
              </table>
         </div>
         <hr>
 </body>
</html>