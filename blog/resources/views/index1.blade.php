<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Laravel</title>
</head>
 <body>
      <button style="background: blue; color:white !important" ><a href="{{ url('http://localhost/newproject/blog/public/edit') }}" style=" color:white">Homepage</a></button>
      <button style="background: blue; color:white !important" ><a href="{{ url('http://localhost/newproject/blog/public/create') }}" style=" color:white">add</a></button>
         <div class="table-responsive">
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
 </body>
</html>