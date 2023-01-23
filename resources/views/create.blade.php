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

        <link href="{{url('css/create.css')}}" rel="stylesheet">

                    <!--  create jquery file --> 

        <script src="{{url('js/create.js')}}"></script>
      <style>
        @media screen and (min-width:600px){
        .dis{
            display:flex;
        }}
         body{
                background: #dee2e6;
            }
            form{
                height:300px;
                width:500px;
                background-color: #a0b7d1;
                color:white;
                 box-sizing: border-box;
                 border:1px solid black;
                 margin:100px 0px 0px 718px;
                 padding-bottom: 5px;
            }
            input{
                border-radius: 5px;
                margin-bottom: 5px;
            }
 
      </style>
    </head>
    <body>
     <div class="dis">
         <form method="post" action="save">
         <div class="row container">
          <div class="col col-12 col-sm-12 col-md-12 col-lg-12 cal"> 
            <h1 style="margin-left: 70px">Login Form</h1>
              @csrf
          
                <div class="title m-b-md ">

                                    <!-- name -->

                   <span style="margin:5px 0px 0px 38px">NAME:</span><input type="text"  name="name" id="name"><br>
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
          </div>
        </div>
     </form>
    </div>
    </body>
</html>


<script >
   

</script>