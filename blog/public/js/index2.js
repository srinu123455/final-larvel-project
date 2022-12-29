
    $(document).ready(function(){
       
            /*if(confirm("Are you ok loggin into student form"))*/
           $(".btn3").click(function(){
           if (!confirm("Are you ok edit data")){
      return false;
    }
           });
    })



    $(document).ready(function(){
       
            /*if(confirm("Are you ok loggin into student form"))*/
           $(".btn2").click(function(){
           if (!confirm("Are you ok delete the data")){

      return false;
    }alert("data deleted successfully");
           });
    })

