<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


                     <!--  create css file -->
        <link href="{{url('css/create.css')}}" rel="stylesheet">

                    <!--  create jquery file --> 

        <script src="{{url('js/create.js')}}"></script>
      
    </head>
    <body>
     
         <form method="post" action="save"> 
            <h1 style="margin-left: 70px">Login Form</h1>
              @csrf
          
                <div class="title m-b-md ">

                                    <!-- name -->

                   <span style="margin:5px 0px 0px 38px">NAME:</span><input type="text" name="name" id="name"><br>
                      @error('name')
                        <div class="alert alert-danger" style="margin-left:70px">{{ $message }}</div>
                      @enderror

                                            <!-- password -->
                               
                        <span> PASSWORD:</span><input type="password" name="password" id="password"><br>
                           @error('password')
                              <div class="alert alert-danger" style="margin-left:70px">{{ $message }}</div>
                           @enderror

                                <input type="submit" style="margin:5px 0px 0px 170px; background: blue; color:white" name="submit" id="submit" value="submit">
                                  <input type="reset" style=" background: blue; color:white" name="clear" id="clear" value="clear">
 
                </div>
         </form>
    </body>
</html>


<script >
   

</script>