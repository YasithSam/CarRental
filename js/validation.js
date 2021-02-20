function validate(){
    if (document.regform.name.value==""){
        alert("Please Enter your Name!");
        document.regform.name.focus();
        return false;
    }
  
    if (document.regform.email.value==""){
        alert("Please Enter your Email!");
        document.regform.email.focus();
        return false;
    }
  
    if(document.regform.phone.value == "" || isNaN(document.regform.phone.value) ||document.regform.phone.value.length != 10){
        alert("Please Enter Phone Number in 10 digits");
        document.regform.phone.focus()
        return false;
    }
  }
  
  function validateEmail() {
    var emailID = document.regform.email.value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");
  
    if (atpos < 1 || ( dotpos - atpos < 2 )) {
        alert("Please enter correct email ID")
        document.regform.email.focus() ;
        return false;
    }
    return( true );
  }
  