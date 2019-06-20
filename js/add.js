$('#supplier').on('change', function() {
      if(this.value == "new"){
            $('#supplier').hide();
            $('#supplier_input').removeAttr('hidden');
      }
});
$('#supplier_back').on('click', function() {
      $('#supplier').show();
      $('#supplier_input').attr('hidden', true);
      $("#supplier").val('choose');
});

$('#storage').on('change', function() {
      if(this.value == "new"){
            $('#storage').hide();
            $('#storage_input').removeAttr('hidden');
      }
});
$('#storage_back').on('click', function() {
      $('#storage').show();
      $('#storage_input').attr('hidden', true);
      $("#storage").val('choose');
});

$('#unit').on('change', function() {
      if(this.value == "new"){
            $('#unit').hide();
            $('#unit_input').removeAttr('hidden');
      }
});
$('#unit_back').on('click', function() {
      $('#unit').show();
      $('#unit_input').attr('hidden', true);
      $("#unit").val('choose');
});

$('.date').datepicker({
      format: "dd/mm/yyyy",
      language: "es",
      startDate: Date()
});
$("#image").fileinput({
      showUpload: false,
      dropZoneEnabled: false,
      mainClass: "input-group-lg",
      browseClass: "btn btn-outline-dark",
      language: "es"
});

