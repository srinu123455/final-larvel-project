<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



     
       <!-- -->
       <style>
form{
  border:1px solid #cdcaca;
 
}
body{
   
}
.header{
  height:60px;
  width:100% !important;
  border:1px solid #cdcaca;
   background:#f5f5f5;
   padding-top: 5px;
   padding-left: 10px;
}
.center{
  height:1000px;
  width:50%;
  padding-top: 10px;
  padding-left: 50px !important;

}
.h2{
  padding:5px 0px 0px 320px;

}
.centerhead{
   height:550px;
  width:92%;
  margin:10px 0px 0px 200px;
  border:1px solid white;


}
.ban{
   height:55px;
  width:1560px;
  margin:10px 0px 0px 28px;
  border:1px solid #cdcaca;
  background:#f5f5f5;
   margin-left: 40px;

}
.centercenter{
   height:250px;
  width:93%;
  margin:10px 0px 0px 20px;
  border:1px solid #cdcaca;

}
.middle{
   height:600px;
  width:1560px;
  margin:0px 0px 0px 28px;
  border:1px solid #cdcaca;
 padding:60px 0px 0px 150px;
 margin-left: 40px;

}
label{
  padding :5px;
}
select{
  margin-bottom: 15px;
}
#RequestType{
  margin-right:10px;
  font-size: 15px;
}
.btn1{
  margin-left: 475px;
  padding-top:2px;
}
textarea{
  width:450px;
  height:80px;
  font-size: 10px;
}
.file{
  background: green;
  color:white;
  width:100px 1!important;
  margin-left: 166px;
  font-size:15px;

}
span{
  font-size:20px; 
}



       </style>
    </head>
     <body>
      
         
             <form method="post" action="saveemp" class="margi" enctype="multipart/form-data">
               {{csrf_field()}}
                    
                         <div class="header">
                           <!--  <button style="background: blue"><a href="http://localhost/newproject/blog/public/edit" style="color: white !important">Homepage</a></button> -->
                          <h2>Create HR Request</h2>
                          
                         
                         </div>
                         <div style="">
                          @include('nav')
                         </div>
        
                         <div class="center" style="height:1180px" >

                           <div class="centerhead" style="padding-left: 20px" >
                            <h3 class="ban"> <i class="fa fa-flag" style="border :1px solid #cdcaca;height:55px;padding: 10px 10px 10px 10px"></i> HR Request</h3>

                            <div class="middle">
                            <h2 class="h2">  
                               <label for="" class="form-label"  style="margin-left: 32px"><span>RequestType</span></label>
                        
                              <select class=""  name="RequestType" id="RequestType" style="width:450px;font-size:18px;padding-left:100px" >
                                <option value="">Address Change</option>
                               
                                <option value="Bank Info Change">Bank Info Change</option>
                                <option value="Health Insurance Change">Health Insurance Change</option>
                                <option value="W-4 withholding">W-4 withholding </option>
                                <option value="Employment Letters">Employment Letters</option>
                                <option value="Immigration Info">Immigration Info</option>
                                <option value="Others">Others</option>
                               </select>
                                @error('RequestType')
                                 <div class="alert alert-danger" style="margin-left:165px;
                                margin-top: 5px; width:450px;font-size:20px;height:30px;padding-bottom: 27px;">{{ $message }}</div>
                                @enderror
   
                         <div>
                       

                               <label for="" class="form-label" style="margin-left: 10px;" ><span>RequestDetails</span></label>
                              <textarea type="text" class="" name="RequestDetails" style="margin-left: 3px;margin-top: 10px;font-size: 18px"></textarea>
                                @error('RequestDetails')
                                 <div class="alert alert-danger" style="margin-left:165px;width:450px;font-size:20px;height:30px;padding-bottom: 27px;">{{ $message }}</div>
                                @enderror
                              <input type="file" name="AddFile" class="form-control file" value="Add files" style="width:450px">
                               @error('AddFile')
                             </div>
                                <div class="alert alert-danger" style="margin-left:165px;margin-top:20px;width:450px;font-size:20px;height:30px;padding-bottom: 27px;">{{ $message }}</div>
                               @enderror
                              <button type="reset" class="btn btn-danger btn1" value="clear" style=" margin-top:20px; padding-top:2px;"><span>clear</span></button>
                               <button type="submit" class="btn btn-success" value="submit" style=" padding-top:2px; margin-top:20px"><span>save</span></button>

                        </h2>
                      </div>
                         
                             
                           </div>
                           
                         </div>
           </form>  
     </body>
</html>
