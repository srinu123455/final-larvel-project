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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


                  <!--    studentdataedit.css file -->
        <link href="{{url('css/studentdataedit.css')}}" rel="stylesheet">
                        <!-- studenteditdata.js file-->
        <script src="{{url('js/studenteditdata.js')}}"></script>
        <style>
            body{
                background: #dee2e6;
            }
           
            form{
                height:400px;
                width:1000px;
                background-color:white;
                color:black;
                 box-sizing: border-box;
                 border:1px solid #cdcaca;
               margin-top: 130px;
               margin-left: 625px;
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
                padding: 50px 0px 0px 270px;
               
              
            }
            input{
              border:1px solid #cdcaca;
              padding-bottom: 5px;
            }
             textarea{
              border:1px solid #cdcaca;
               border-radius: 10px;
            }
          

        </style>
    </head> 
     <body>
          <div style="">
              @include('nav')
              </div> 
              <div class="head">
                  <h2></h2>
              </div> 
             
                 
          <form method="post" action="{{url('studentupdate/'.$student->id)}}">
             <div class="formhead">
                <h2 style="padding-left: 320px">Update_Student_Data</h2>
                 </div>
             
               @csrf
               @method('PUT')
          
                <div class="title formbody">

                                        <!--  name -->
                  <div>
                            <label for="" class="form-label" style="margin:5px 0px 0px 51px;padding-right: 8px">Name<span style=color:red>*</span>:</label><input type="text" name="name" value="  
                     {{$student->name}}" class="" id="name" style="width:250px;height:33px;"><br>
                            @error('name')
                          <div class="alert alert-danger" style="margin-left:112px;margin-top:10px;width:250px;font-size:15px !important ;height:30px;padding-bottom: 27px;" >{{ $message }}</div>
                           @enderror
                         </div>

                                           <!--  age -->

<div style="margin-top: 5px">  
                         <label for="" class="form-label" style="margin:5px 0px 0px 65px;padding-right: 8px"> Age<span style=color:red>*</span>:</label><input type="type" value="{{$student->age}}" name="age"style="width:250px;height:33px" class="" id="age"><br>
                           @error('age')
                             <div class="alert alert-danger" style="margin-left:112px;margin-top:10px;width:250px;font-size:15px !important ;height:30px;padding-bottom: 27px;">{{ $message }}</div>
                           @enderror

                         </div>


                                                    <!-- gender -->

                                   <span style="margin:5px 0px 0px 38px;;padding-right: 8px"> Gender<span style=color:red>*</span>:</span>
                                        <input type="radio" name="gender" value="Male" {{ $student->gender == 'Male' ? 'checked' : ''}}>Male
                                        <input type="radio" name="gender" value="Female" {{ $student->gender == 'Female' ? 'checked' : ''}}>Female<br>
                                                @error('gender')
                                                  <div class="alert alert-danger" style="margin-left:112px;margin-top:10px;width:250px;font-size:15px !important ;height:30px;padding-bottom: 27px;">{{ $message }}</div>
    
                                                @enderror

                                                                <!-- Address -->


                                <label for="" class="form-label" style="margin:5px 0px 0px 37px;padding-right: 10"> Address<span style=color:red>*</span>:</label>
                                       <textarea type="type" name="Address" class="" id="Address" style="width:250px;margin-left:2px">  {{$student->Address}}
                                        </textarea><br>
                                           @error('Address')
                                               <div class="alert alert-danger" style="margin-left:112px;margin-top:10px;width:250px;font-size:15px !important ;height:30px;padding-bottom: 27px;">
                                                  {{ $message }}
                                                </div>  
                                           @enderror 

                                              <input type="submit" style="margin:5px 0px 0px 295px; background: #337ab7; color:white" name="submit" id="submit" value="Update">

              
           
               </div>
             </form>
    </body>
 </html>

<style>

 $(document).ready(function(){
       
          
           $("#submit").click(function(){
           if (!confirm("Are you ok edit data")){
      return false;
    }alert("data updated successfully");
           });
    })

</style>
