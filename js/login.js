const url = "http://localhost:8888/inventory-management";

function validEmail(email) {
      var format = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return (format.test(email));
}
function validClass(someInput){
      someInput.removeClass("pois-invalid").addClass("pois-valid");
}
function invalidClass(someInput){
      someInput.removeClass("pois-valid").addClass("pois-invalid");
}

$('#email').on('input', function(){
      var input = $(this);
      var label = $('#email_info');
      var email = input.val();
      if(!validEmail(email)){
            invalidClass(input);
            label.html('Ingresa un email válido.');
      }else if(email == ''){
            invalidClass(input);
            label.html('Debes ingresar un email.');
      }else{
            validClass(input);
            label.html("");
      }
});

$('#password').on('input', function(){
      var input = $(this);
      var pass = input.val();
      var label = $('#password_info')
      if(pass == ''){
            invalidClass(input);
            label.html('Debes ingresar la contraseña.');
      }else{
            validClass(input);
            label.html("");
      }
});

$("#submit_login").click(function(event){
      var email = $("#email");
      var labelEmail = $("#email_info");
      var pass = $("#password");
      var labelPassword = $("#password_info");
      var labelMessage = $("#login_info");
      var error = false;
      var lenEmail = email.val().length;
      var lenPass = pass.val().length;
      var emailVal = email.val();
      var passVal = pass.val();
      if(lenEmail < 2){
            error = true;
            invalidClass(email);
            labelEmail.html("Debes ingresar tu email.");
      }
      if(lenPass < 8){
            error = true;
            invalidClass(pass);
            labelPassword.html("Debes ingresar la contraseña y mayor a 8 caracteres.");
      }
      if (error){
            event.preventDefault();
      }else{
            event.preventDefault();
            $.ajax({
                  url: url + "/admin/user_tools.php",
                  method: "POST",
                  data: {email: emailVal, pass: passVal},
                  dataType: "json",
                  success:function(response){
                        if(response.success){
                              invalidClass(pass);
                              invalidClass(email);
                              labelMessage.html(response.message);
                              event.preventDefault();
                        }else{
                              validClass(pass);
                              validClass(email);
                              labelMessage.html("");
                              window.location.reload();
                        }
                  }
            });
      }
});