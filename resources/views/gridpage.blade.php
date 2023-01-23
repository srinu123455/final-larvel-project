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

 
  
 

.header{
float:left;
 
  border:1px solid #cdcaca;
  height :70px;
  width:13%;
  padding : 10px 0px 0px 10px;
  background: #efe6e6;
  font-size: 25px;

}
.menu{
   padding-top : 10px  ;
 

  border:1px solid #cdcaca;
   height :70px;
  width:100%;
  background: #efe6e6;
    font-size: 25px;
    padding-left: 50px;
   
}
.nav1{
  float:left;
 
  border:1px solid #cdcaca;
  height :800px;
  width:13%;
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
 .center{
   height :800px;
  width:100%;
    border:1px solid #cdcaca;
      background: white;
 }
 .footer{
   height :250px;
  width:100%;
    border:1px solid #cdcaca;
      background:white;

 }
  
  

  
  
 
  
</style>
</head>
<body>
  <div class=" header">
    Home Page
  </div>


  <div class=" menu">
    <span style="margin-left: 50px"> Student Data</span>
  </div>



  <div class="nav1">
    <button style="margin-bottom:10px;padding: 15px 0px 0px 40px; background: black"><a href="{{ url('http://localhost/newproject/blog/public/index') }}">User_Password_Data</a></button>
<div class="">
        <ul class="form-select" style="list-style-type:none;">
          <!-- Dropdown-->
          <li class="panel panel-default" id="dropdown">
            <a data-toggle="collapse" href="#dropdown-lvl1">
              <i class="fa fa-users"></i> StudentsData
              <span class="caret"></span>
                                            </a>
            <!-- Dropdown level 1 -->
            <div id="dropdown-lvl1" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav navbar-nav">
                  <li><a href="http://localhost/newproject/blog/public/studentdata">Add_Student_Data</a></li>
                  <li><a href="http://localhost/newproject/blog/public/index2">View_Student_Data</a></li>
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
                     
              <span class="caret"></span>
                                            </a>
            <!-- Dropdown level 1 -->
            <div id="dropdown-lvl2" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav navbar-nav">
                  <li><a class="nav-link {{ Request::is('http://localhost/newproject/blog/public/employeecreate') ? 'active':''}}" href="http://localhost/newproject/blog/public/employeecreate">Create HR Request</a></li>
                  <li><a href="http://localhost/newproject/blog/public/index4">My Request</a></li>
                

                  
                </ul>
              </div>
            </div>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="center">
    

  </div>
  <div class="footer">
  </div>


        
</body>
</html>