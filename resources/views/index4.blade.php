<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


         
     
              <!--  index2.js files -->
  

       <title>Laravel</title>
       <style>
        .header{
  height:60px;
  width:100% !important;
  border:1px solid #cdcaca;
   background:#e9e9eb;
   padding:10px 0px 0px 30px;
}
     #table{

       width:84% !important;
       height:1170px;
   
     } 
     table{
       margin:20px 20px 0px 20px;
     }
     tbody,td{
      height:50px !important;
     }     </style>
</head>

  <div class="header">

         <h2> My Requests</h2>
          </div>
<body>                  <div style="">
                          @include('nav')
                         </div>

    <button style="background: #337ab7;height:40px; margin:4px 3px 3px 3px"><a href="http://localhost/newproject/blog/public/studentdata" style="color: white !important">Add-data</a></button>
    
 <div class="table-responsive " id="table">                                                                                                                                                                                                                                                                                                                                                          
      <table class="table table-striped table-hover  border"  >
         <thead style="background: pink">
           <tr>
            <th><strong>Id</strong></th>
            <th><strong>RequestType</strong></th>
            <th><strong>RequestDetails</strong></th>
            <th><strong>AddFile</strong></th>
            
           
          </tr>
         </thead>
         <tbody>
             @foreach($employee as $employee1)
              <tr style="border:1px solid black">
               <td>{{$employee1->id}}</td>
               <td>{{$employee1->RequestType}}</td>
               <td>{{$employee1->RequestDetails}}</td>
               <td>{{$employee1->AddFile}}</td>
           
              </tr>
             @endforeach
         </tbody>
      </table>
</div>
</body>
</html>