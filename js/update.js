const url = "http://localhost:8888/inventory-management";

function isBarcode(barcode, input, label, quantity, buttons){
      $.ajax({
            url: url + "/admin/tools/inventory.php",
            method: "POST",
            data: {barcodeCheck: true, barcode: barcode},
            dataType: "json",
            success:function(response){
                  quantity.val(response.quantity);
                  if(!response.success){
                        invalidClass(input);
                        label.html(response.message);
                        invalidClass(quantity);
                        buttons.find('input, button').attr('disabled', true);
                        buttons.find('button').addClass("pois-invalid")
                  }else{
                        validClass(input);
                        validClass(quantity)
                        label.html("");
                        buttons.find('input, button').attr('disabled', false);
                        buttons.find('button').removeClass("pois-invalid")
                  }
            }
      });
}

$('#update_group').find('input, button').attr('disabled', true);

$('#barcode').on('input', function(){
      var input = $(this);
      var label = $('#barcode_info');
      var barcode = input.val();
      var quantity = $('#quantity');
      var buttons = $('#update_group');

      if(barcode == ''){
            invalidClass(input);
            label.html('Debes ingrear un código de barras.');
      }else{
            isBarcode(barcode, input, label, quantity, buttons);
      }
});

$("#submit_update").click(function(event){
      var barcode = $("#barcode");
      var label = $("#barcode_info");
      var barcodeVal = barcode.val();
      var buttons = $('#update_group');
      var quantity = $('#quantity');
      var error = false;
      if(barcodeVal == ''){
            invalidClass(barcode);
            invalidClass(quantity);
            label.html("Debes ingresar un código de barras.");
            buttons.find('input, button').attr('disabled', true);
            buttons.find('button').addClass("pois-invalid");
            
            error = true;
      }else{
            
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