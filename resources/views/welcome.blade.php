<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title>Laravel</title>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

                                    <!--   studentdatacreate.css file -->
        <link href="{{url('css/studentdatacreate.css')}}" rel="stylesheet">
                                 <!--  studentcreate.js file -->
        <script src="{{url('js/studentcreate.js')}}"></script>

        <!--  --><style>   .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }
             form{
                height:500px;
                width:500px;
                background-color:#a0b7d1;
                color:black;
                 box-sizing: border-box;
                 border:1px solid black;
                 margin:0px 0px 400px 250px;
            }

        </style>
    </head>
     <body><div style="">
   @include('nav')
 </div>
     

         <div class="flex-center position-ref full-height">

       <div class="row container">
        <div class="col col-12 col-sm-12 col-lg-4 col-md-6 col-xl-3">   

        <form method="post" action="saved">
          
           <button style="background: blue"><a href="http://localhost/newproject/blog/public/edit" style="color: white !important">Homepage</a></button>
              <h1 style="margin-left: 70px">Student_Data</h1>
                @csrf
          
                 <div class="title m-b-md ">

                                            <!-- Name -->
             <div>
                 <span style="margin:5px 0px 0px 38px">NAME:</span><input type="text" name="name" id="name"><br>
                    @error('name')
                      <div class="alert alert-danger" style="margin-left:70px;margin-bottom: 5px">{{ $message }}</div>
                    @enderror
             </div>
                                                       <!-- Age -->
            <div style="margin-top: 5px">  
                        <span style="margin:5px 0px 0px 58px"> age:</span><input type="type" name="age" id="age"><br>
                          @error('age')
                             <div class="alert alert-danger" style="margin-left:70px">{{ $message }}</div>
                          @enderror

                        </div>                                    <!--  Gender -->

                               <span style="margin:5px 0px 0px 35px"> gender:</span>
                                 <input type="radio" name="gender" value=Male>Male
                                  <input type="radio" name="gender" value=Female>Female<br>
                                   @error('age')
                                     <div class="alert alert-danger" style="margin-left:70px">{{ $message }}
                                     </div>
                                   @enderror

                                                             <!-- Address
 -->
                                     <span style="margin:5px 0px 0px 30px"> Address:</span>
                                       <textarea type="type" name="Address" id="Address" style="width:184px;padding-right: 5px"></textarea><br>
                                         @error('Address')
                                               <div class="alert alert-danger" style="margin-left:70px">
                                                  {{ $message }}
                                                </div>  
                                         @enderror 


                                         <input type="submit" style="margin:5px 0px 0px 215px; background: blue; color:white" name="submit" id="submit" value="submit">

              
           
               </div>
         </form>
       </div>
       </div></div>
     

     </body>
</html>
