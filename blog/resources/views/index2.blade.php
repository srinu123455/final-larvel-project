<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


                  <!--  index2.js files -->
       <script src="{{url('js/index2.js')}}"></script>

       <title>Laravel</title>
</head>
<body>
    <button style="background: blue"><a href="http://localhost/newproject/blog/public/edit" style="color: white !important">Homepage</a></button>
    <button style="background: blue"><a href="http://localhost/newproject/blog/public/studentdata" style="color: white !important">Add-data</a></button>


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
               <td><a href="{{url('studenteditdata/'.$show3->id)}}" class="btn btn-danger btn3" id="edit">Edit</a>
                   <a href="{{url('delete/'.$show3->id)}}" class="btn btn-success btn2" id="delete">Delete</a>
               </td>      
              </tr>
             @endforeach
         </tbody>
      </table>
</div>
</body>
</html>
