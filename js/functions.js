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