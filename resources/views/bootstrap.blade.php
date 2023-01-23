<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
 <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
      <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> 

      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

           
            .flex-center {
               
                display: flex;
                
            }

          
/*div.c{
    text-align: center;
    margin:20px 0px 30px 30px;
    position: relative;
    color: black;
  
  }
  .width{
     height:10px;
     width:150px;
     padding: 20px;
     
     
  
      }
      .c2
       {
        width: 30%;
        /*margin-left: 30px;
        padding-bottom: 30px;
        margin-bottom: 30px;*/
      /*  shape-outside: 20px;
       }
      div{
         margin-top: 30px;
      }
      h1{
        background-color: lightcyan;
      }
      .a1
       {
        margin-left:780px;
       }
        #a1
       {
        margin-right:40px;
       }
        .a2
       {
        margin-left:50px;
       }
        #a2
       {
        margin-right:10px;
       }
  textarea{
      padding: 0px 20px 20px 0px;
      style="color: blueviolet;
  }
  #btn1{
    background-color: cadetblue;
  }
  #btn2{
      background-color: steelblue;
  
  }div.c{
    text-align: center;
    margin:20px 0px 30px 30px;
    position: relative;
    color: black;
  
  }
  .width{
     height:10px;
     width:150px;
     padding: 20px;
     
     
  
      }
      .c2
       {
        display: block;
        margin-left: 200px;
       /* width: 30%;*
        padding-bottom: 30px;
        margin-bottom: 30px;
        shape-outside: 20px;
       }
      div{
         margin-top: 30px;
      }
      h1{
        background-color: lightcyan;
      }
      .a1
       {
        margin-left: 30%px;
        width: 20%;
       }
        #a1
       {
        margin-right:40px;
       }
        .a2
       {
        margin-left:50px;
       }
        #a2
       {
        margin-right:10px;
       }
  textarea{
      padding: 0px 20px 20px 0px;
      style="color: blueviolet;
  }
  #btn1{
    background-color: cadetblue;
  }
  #btn2{
      background-color: steelblue;
  
  }
  .error{
    color: red;
  }
  .requiredLabel{
    color: red;
  }
  .inputElement{
 display: block;
    margin-bottom:0%;
   /* float: left;*/
  }
   
  /*
  .name{
     width: 20%;
    margin-left: 47%;
    margin-bottom: 50px;
   
  }
  /*#name{*/
   
        /* margin-left: 100%;
         margin-botton: 40px;
  }
  .address1 {
width: 30% !important;
    /*margin-left: 53%;*/
  }
  /*.form{
    margin-left: 200px;
  }*//*/*/
  @import "compass";
@import url("https://fonts.googleapis.com/css?family=Open+Sans");

/* Color settings */
$formBg: #2c3e50;
$formColor: #fff;
$inputBg: #fff;
$inputColor: #000;
$buttonBg: #e67e22;
$buttonColor: #fff;
$errorMsgColor: #ff0000;

/* Styles */

* {
  margin:20px 20px 20px 20px;
  padding: 0;
}

body {
  font-family: "Open Sans";
  font-size: 14px;
    margin:80px 160px 0px 160px;
}

.container {
  width: 500px;
  margin: 25px auto;
}

form {
  padding: 20px;
  background: $formBg;
  color: $formColor;

 
  }
  label,
 
  button {
    border: 0;
    margin-bottom: 3px;
    display: block;
    width: 50%;

  }
  input {
    height: 25px;
    line-height: 25px;
    background: $inputBg;
    color: $inputColor;
    padding: 0 6px;

  }
  button {
    background-color: blue;
    color: white;
  }
  .error {
    color: $errorMsgColor;
  }
}

.article-reference {
  margin-top: 15px;
 
}
#btn1{
    float: left;
     background-color: blue;
    color: white;
    border: 1px solid white;
  }
  #submitBtn{
    
  
     background-color: blue;
    color: white;
      border: 2px solid white;
  }
  .error{
    color: red;
  }
  h1{
    background-color: lightcyan;
}
usname{
    margin-left: 25px;
}
}
           


            
        </style>
    </head>
 
    <body style="background-color:lightgray">
      <div class="flex-center position-ref full-height">
      <script type="text/javascript" src="week1task1student_form.js"></script>
       
        <div class="c">

         <form class="container" id="signupForm" name="form" >

             <h1>student form</h1>

<!-- <div class="col-sm-12">
    Username<span class="error">*</span>
    <span>
        <input id="name" type="text" name="name" placeholder="user_name" value="">
    </span>
</div> -->
                      <div>
                           <span style=" margin-left:10px">Username<span class="error">*</span>:</span>
                               <!-- <div class="name"> -->
                                    <input id="name" type="text" name="name" placeholder="user_name" value="" style="width: 150px; ">
                               </div>
               <!--        </div> -->
                               <!-- <h5 id="usercheck" style="color:red">please enter min 3 letters and max 10 letters</h5> -->
                    <div  class ="a1">
                          <span style="margin-left: 45px;">age<span class="error" >*
                          </span>:
                                
                                  <input id="age" type="text" name="age" placeholder="age" value="" style="  width: 10%; margin-top: 10px;width:150px" >
                   
                    <span id="numberText"></span>
                    <div>
                           
                              
                                   <span id="a2" style="   margin-left:25px ;" name="a2">gender<span class="error">*</span> :
                                            <input id="gender" class="radio"  type="radio" value="male" name="radio" style="  width: 30px; margin-top: 10px; ">Male
                                            <input class="radio"  type="radio" value="female" name="radio" style="  width: 30px; ">Female
                            
                                  </span>


        



                    <div class="form2">
                    
                        <div class="inputElement">
                            <span class="c2" style="   margin-left:25px ;"> address<span class="error">*</span></span>:
                                  <textarea name="address" id="address" class="width" rows="4" cols="50" placeholder="enter user address here" style="width: 150px ; margin-left:0px"></textarea></span>

                        </div>
                    </div>

                    <div>
                         <span><span style="margin-right:83px;">Education
                                <span class="error" style="margin-right:6px">*</span>:
                                      <input name="school" class="form2" type="checkbox" value="high_school" style="  width: 30px; margin-left:15px ;">high school
                                </span><br>

                                <span style=margin-right:51px;> 
                                     <input name="inter" class="form2" type="checkbox" value="inter"  style="  width: 30px; margin-left:95px ;">inter
                                </span><br>

                                <span style=margin-right:35px;>
                                     <input name="degree" class="form2" type="checkbox" value="degree" style="  width: 30px; margin-left:95px ;">degree
                                </span><br>

                                <span style=margin-right:59px;>
                                     <input name="pg" class="form2" type="checkbox" value="Phd" style="  width: 30px; margin-left:95px ;">Phd
                               </span></span>
                    </div>
                    <div id="a1" style="   margin-left:25px ;">city
                               <span class="error" style="margin-right:20px">*</span>:
                                  <select id="sel"  style="width: 150px ">
                                          <div>
                                             <option >select</option> 
                                             <option >kakinada</option>
                                             <option>narsapuram</option>
                                             <option>vishakapatnam</option>
                                  </select><br>
                    </div>
                    <div style="  margin-left: 90px; margin-top:10px" ;>
                          <input id="btn1" class="a2" type="reset" value="clear" style="  width: 50px; margin-left: 30px;" >
                          <input type="button" id="submitBtn" value="submit"  style="  width: 70px">
               
                    </div>
         
          </form> 
        </div>
</div>

</body>
</html>
<script>
 $(document).on('click','#submitBtn', function() {
    $("#signupForm").valid();
   /* console.log("User-Name:" +$('#name').val());*/
   var a=$("#name").val();
    var b=$("#age").val();
    var c=$('input[name="radio"]:checked').val();
    var d=$('input[name="radio"]:checked').val();
    var e=$("#address").val();
     var f=$('input[name="school"]:checked').val();
     var g=$('input[name="inter"]:checked').val();
     var h=$('input[name="degree"]:checked').val();
     var i=$('input[name="pg"]:checked').val();
     var j =$("#sel").val();
    console.log("User-Name:" +a);
    console.log("Age:"+b);
    console.log("Gender:"+c);
    console.log("Gender:"+d);
    console.log("Address:"+e);
    console.log("school:"+f);
    console.log("inter:"+g);
    console.log("degree:"+h);
    console.log("pg:"+i);
    console.log("City:"+j);
});
 $().ready(function () {
             

            $("#signupForm").validate({
                // in 'rules' user have to specify all the constraints for respective fields
                rules: {
                   
                    name: {
                        required: true,
                        minlength: 2 //for length of lastname
                    },
                    age: {
                        required: true,
                         maxlength: 2
                    },
                    a2:"required",
                    address:{
                        required: true,

                    },
                    
                   
              
                // in 'messages' user have to specify message as per rules
                messages: {
                    a2: " Please enter your firstname",
                    
                    name: {
                        required: " Please enter a username",
                        minlength: " Your username must consist of at least 2 characters"
                    },
                     age: {
                        required: " Please enter age",
                        maxlength: " Your username must consist only 2 numbers"

                    },
                     address: {
                        required: " Please enter a username",
                       
                    },

                },
    errorPlacement: function(error, element) 
        {
        if(element.parent('.input-group').length) {
               error.insertAfter(element.parent());
            } 
           else if ( element.is(":radio") ) 
           {
               error.appendTo( element.parents('.radio') );
           }
           else 
           { 
               error.insertAfter( element );
           }
        }
            } 
                  
                
            });
        });

function myfun(){
        
    var a=$("#name").value;
    var b=$("#age").value;
    var c=$('input[name="radio"]:checked').value;
    var d=$('input[name="radio"]:checked').value;
    var e=$("address").value;
     var f=$('input[name="school"]:checked').value;
     var g=$('input[name="inter"]:checked').value;
     var h=$('input[name="degree"]:checked').value;
     var i=$('input[name="pg"]:checked').value;
     var j =$("sel").value;
    console.log("User-Name:" +a);
    console.log("Age:"+b);
    console.log("Gender:"+c);
    console.log("Gender:"+d);
    console.log("Address:"+e);
    console.log("school:"+f);
    console.log("inter:"+g);
    console.log("degree:"+h);
    console.log("pg:"+i);
    console.log("City:"+j);
}
</script>