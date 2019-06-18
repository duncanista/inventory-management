const url = "http://localhost:8888/inventory-management";

function isBarcode(barcode, input, label, quantity){
      var success = false;
      $.ajax({
            url: url + "/admin/tools/inventory.php",
            method: "POST",
            data: {barcodeCheck: true, barcode: barcode},
            dataType: "json",
            success:function(response){
                  if(response.error){
                        invalidClass(input);
                        label.html(response.message);
                  }else{
                        validClass(input);
                        label.html("");
                        success = true;
                  }
                  quantity.html(response.quantity);
            }
      });
      return success;
}
$('#update_group').find('input, button').attr('disabled', true);

$('#barcode').on('input', function(){
      var input = $(this);
      var label = $('#barcode_info');
      var barcode = input.val();
      var quantity = $('#quantity');
      if(barcode == ''){
            invalidClass(input);
            label.html('Debes ingrear un código de barras.');
      }else if(!isBarcode(barcode, input, label, quantity)){
            var b = true;
      }
});

$("#submit_update").click(function(event){
      var barcode = $("#barcode");
      var labelBarcode = $("#barcode_info");
      var barcodeVal = barcode.val();
      var error = false;
      if(barcodeVal == ''){
            invalidClass(barcode);
            labelBarcode.html("Debes ingresar un código de barras.");
            error = true;
      }

      if (error){
            event.preventDefault();
      }else{
            event.preventDefault();
            $.ajax({
                  url: url + "/admin/tools/user.php",
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