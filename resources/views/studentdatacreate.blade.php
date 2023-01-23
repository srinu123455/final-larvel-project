<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <script
          src="https://code.jquery.com/jquery-3.6.3.min.js"
          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
          crossorigin="anonymous"></script>
       <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                                    <!--   studentdatacreate.css file -->
        <link href="{{url('css/studentdatacreate.css')}}" rel="stylesheet">
                                 <!--  studentcreate.js file -->
        <script src="{{url('js/studentcreate.js')}}"></script>

        <!--  --><style>   .full-height {
                height: 100vh;
            }

         /*   .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }*/

            .position-ref {
               
            }
             form{
                height:400px;
                width:1000px;
                background-color:white;
                color:black;
                 box-sizing: border-box;
                 border:1px solid #cdcaca;
                 border-radius: 10px;
               

            }
            input{
              border:1px solid #cdcaca;
              padding-bottom: 5px;
            }
             textarea{
              border:1px solid #cdcaca;
               border-radius: 10px;
            }
            .head{
              width:100%;
              height:50px;
              border :1px solid #cdcaca;
              padding: 5px 0px 0px 10px;
               background: #f5f5f5;
              color:black;

            }
            h1{
              padding-left: 10px;
            }
            .formhead{
               width:100%;
              height:50px;
              border :1px solid #cdcaca;
              padding: 5px 0px 0px 10px;
              margin-right: 200px !important;
               background: #f5f5f5;
                 color:black;
                  border-radius: 10px;
             
            }
            .formbody{
                padding: 50px 0px 0px 250px;
               
              
            }


        </style>
    </head>
     <body>  <div style="">
              @include('nav')
              </div>
              <div class="head">
                  <h2></h2>
              </div>
               

        <div class="flex-center position-ref full-height">

          <div class="row container">
           <div class="col col-12 col-sm-12 col-lg-4 col-md-6 col-xl-3">   

               <form method="post" action="saved">
          
                 <div class="formhead">
                  <h2 style="padding-left: 370px">Student_Data</h2>
                 </div> 
                  
                    @csrf
          
                       <div class="title m-b-md formbody">

                                            <!-- Name -->
                        <div>
                            <label for="" class="form-label" style="margin:5px 0px 0px 51px;padding-right: 8px">Name<span style=color:red>*</span>:</label><input type="text" name="name" class="" id="name" style="width:250px;height:33px"><br>
                            @error('name')
                          <div class="alert alert-danger" style="margin-left:112px;margin-top:10px;width:250px;font-size:15px;height:30px;padding-bottom: 27px;" >{{ $message }}</div>
                           @enderror
                         </div>
                                                       <!-- Age -->
                       <div style="margin-top: 5px">  
                         <label for="" class="form-label" style="margin:5px 0px 0px 65px;padding-right: 8px"> Age<span style=color:red>*</span>:</label><input type="type" name="age"style="width:250px;height:33px" class="" id="age"><br>
                           @error('age')
                             <div class="alert alert-danger" style="margin-left:112px;margin-top:10px;width:250px;height:30px;padding-bottom: 27px;">{{ $message }}</div>
                           @enderror

                         </div>                                    <!--  Gender -->
 
                               <span  style="margin:5px 0px 0px 40px;padding-right: 8px"> Gender<span style=color:red>*</span>:</span>
                                 <input type="radio" name="gender" value=Male style="margin-right:  20px">Male
                                  <input type="radio" name="gender" value=Female style="margin-left: 20px">Female<br>
                                   @error('age')
                                     <div class="alert alert-danger" style="margin-left:112px;margin-top:10px;width:250px;font-size:15px;height:30px;padding-bottom: 27px;">{{ $message }}
                                     </div>
                                   @enderror

                                                             <!-- Address
 -->
                                     <label for="" class="form-label" style="margin:5px 0px 0px 37px;padding-right: 10"> Address<span style=color:red>*</span>:</label>
                                       <textarea type="type" name="Address" class="" id="Address" style="width:250px;margin-left:2px"></textarea><br>
                                         @error('Address')
                                               <div class="alert alert-danger" style="margin-left:112px;margin-top:10px;width:250px;font-size:15px !important ;height:30px;padding-bottom: 27px;">
                                                  {{ $message }}
                                                </div>  
                                         @enderror 


                                         <input type="submit" style="margin:5px 0px 0px 300px; background: #337ab7; color:white" name="submit" id="submit" value="submit" >

              
           
               </div>
         </form>
       </div>
       </div>
     </div>

     </body>
</html>
<style>
  $(document).ready(function(){
       
           
           $("#submit").click(function(){
           if (!confirm("Are you ok insert data into student form")){
      return false;
    }
           });
    });
</style>