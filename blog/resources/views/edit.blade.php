<!DOCTYPE html>


<!-- 
HOMEPAGE
 -->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<!--Get your own code at fontawesome.com-->
      
                      <!--edit.css file  -->      
        <link href="{{url('css/edit.css')}}" rel="stylesheet">
    </head>
    <body>
     
      <form method="post" action=""> @csrf
            <h1 style="margin-left: 20px">Home-page</h1><hr>
               <button style="background: blue; color:white !important; margin-left: 25px" ><a href="{{ url('http://localhost/newproject/blog/public/index') }}" style=" color:white">User_Password_Data</a></button>
                <details>
                  <summary style="background: blue; color:white; width:160px; height:30px; margin: 5px 0px 5px 10px"> 
                     <a>
                       <i class="fas fa-users"></i>
       
                           Employees
                  
                     </a>
                  </summary>
            
                           <div class="details-content">
                             <button style="background: blue;margin-left: 40px"> <a href="http://localhost/newproject/blog/public/studentdata" style="color: white !important">Add_Student_Data</a>
                             </button><br>
                
                  
                                <button style="background: blue;margin-top:5px;margin-left: 40px "><a href="http://localhost/newproject/blog/public/index2" style="color: white !important">View_Student_Data</a></button>

                 
                           </div>
                </details>
     
        </div>
      </form>
    </body>
</html>
