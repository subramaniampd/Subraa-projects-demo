jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#myform" ).validate({
  rules: {
    
    password: "required",
    password_again: {
      equalTo: "#password"
    }
  },
  messages: {
        password_again: "Password not match"
       
        }
      
});