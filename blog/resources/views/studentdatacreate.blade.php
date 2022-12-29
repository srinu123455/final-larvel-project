<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <title>Laravel</title>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

                                    <!--   studentdatacreate.css file -->
        <link href="{{url('css/studentdatacreate.css')}}" rel="stylesheet">
                                 <!--  studentcreate.js file -->
        <script src="{{url('js/studentcreate.js')}}"></script>

        <!--  -->
    </head>
     <body>
       
                
        <form method="post" action="saved">
           <button style="background: blue"><a href="http://localhost/newproject/blog/public/edit" style="color: white !important">Homepage</a></button>
              <h1 style="margin-left: 70px">Student_Data</h1>
                @csrf
          
                 <div class="title m-b-md ">

                                            <!-- Name -->

                 <span style="margin:5px 0px 0px 38px">NAME:</span><input type="text" name="name" id="name"><br>
                    @error('name')
                      <div class="alert alert-danger" style="margin-left:70px">{{ $message }}</div>
                    @enderror

                                                       <!-- Age -->

                        <span style="margin:5px 0px 0px 58px"> age:</span><input type="type" name="age" id="age"><br>
                          @error('age')
                             <div class="alert alert-danger" style="margin-left:70px">{{ $message }}</div>
                          @enderror

                                                            <!--  Gender -->

                               <span style="margin:5px 0px 0px 38px"> gender:</span>
                                 <input type="radio" name="gender" value=Male>Male
                                  <input type="radio" name="gender" value=Female>Female<br>
                                   @error('age')
                                     <div class="alert alert-danger" style="margin-left:70px">{{ $message }}
                                     </div>
                                   @enderror

                                                                   <!-- Address
 -->
                                     <span style="margin:5px 0px 0px 30px"> Address:</span>
                                       <textarea type="type" name="Address" id="Address"></textarea><br>
                                         @error('Address')
                                               <div class="alert alert-danger" style="margin-left:70px">
                                                  {{ $message }}
                                                </div>  
                                         @enderror 


                                         <input type="submit" style="margin:5px 0px 0px 240px; background: blue; color:white" name="submit" id="submit" value="submit">

              
           
               </div>
         </form>
     </body>
</html>
