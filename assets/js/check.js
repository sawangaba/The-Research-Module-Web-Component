   
       
           function checkPass(){
        
         var pass = document.forms["ww"]["pass"].value;
   var cpass = document.forms["ww"]["cpass"].value;


    if (cpass==pass) {
        document.getElementById("cpass").className = 'form-control';
        return true;
    } 
    else{
        document.getElementById("cpass").className = 'passerror';
        return false;
    }       
        
    }
       