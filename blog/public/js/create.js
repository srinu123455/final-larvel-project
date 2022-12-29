 $(document).ready(function(){
       
            /*if(confirm("Are you ok loggin into student form"))*/
           $("#submit").click(function(){
           if (!confirm("Are you ok loggin into student form")){
      return false;
    }
           });
    });