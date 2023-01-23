<html>
<head>
       
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      

<style>



/*main side bar*/

 
  
 



.nav1{
  float:left;
 
  border:1px solid #cdcaca;
  height :1170px;
  width:15%;
  color:white;
  background: black;
    font-size: 20px;
}
a{
  color:#b1a4a4 !important;
}
ul,li,a:hover{
   color:white !important;
}

  

  
  
 
  
</style>
</head>
<body>

  <div class="nav1">
    <button style="margin-bottom:10px;padding: 15px 0px 0px 40px; background: black"><a href="{{   url('http://localhost/newproject/blog/public/index') }}">User_Password_Data</a></button>
    <div class="">
        <ul class="" style="list-style-type:none;">
          <!-- Dropdown-->
          <li class="panel panel-default" id="dropdown">
            <a data-toggle="collapse" href="#dropdown-lvl1">
              <i class="fa fa-users"></i> StudentsData
              <i class="fa fa-chevron-down" style="margin-left: 35px"></i>
              <span class="caret"></span>
                                            </a>
            <!-- Dropdown level 1 -->
            <div id="dropdown-lvl1" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav navbar-nav">
                  <li><a href="http://localhost/newproject/blog/public/studentdata" style="margin-left: 25px">Add_Student_Data</a></li>
                  <li><a href="http://localhost/newproject/blog/public/index2" style="margin-left: 25px">View_Student_Data</a></li>
                </ul>
              </div>
            </div>
          </li>  
        </ul>
      </div>
  
      <div >
         <ul class="nov2" style="list-style-type:none;">
          <!-- Dropdown-->
          <li class="panel panel-default" id="dropdown">
            <a data-toggle="collapse" href="#dropdown-lvl2">
             <i class="fa fa-flag"></i> HR Request
             <i class="fa fa-chevron-down" style="margin-left: 50px"></i>
                     
              <span class="caret"></span>
            </a>
            <!-- Dropdown level 1 -->
            <div id="dropdown-lvl2" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav navbar-nav">
                  <li><a class="nav-link {{ Request::is('http://localhost/newproject/blog/public/employeecreate') ? 'active':''}}" href="http://localhost/newproject/blog/public/employeecreate" style="margin-left: 25px">Create HR Request</a></li>
                  <li><a href="http://localhost/newproject/blog/public/index4" style="margin-left: 25px">My Request</a></li>
                
                </ul>
              </div>
            </div>
          </li>
          
        </ul>
      </div>
    </div>
   
  

        
</body>
</html>