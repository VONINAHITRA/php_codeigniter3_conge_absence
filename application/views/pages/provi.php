$("#addbtnOK").on('click', function() {
      var url = $('#myForm').attr('action');
      var data = $('#myForm').serialize();
      $.ajax({
      type: 'ajax',
       method: 'post',
       url: url,
       data: data, // /converting the form data into array and sending it to server
      dataType: 'json',
      success:function(response) {
        if(response.success === true) {
           loadTable.ajax.reload(null, false);
           toastr.success(response.messages).show();
             $('#confirmationDemande').modal('hide');

             $('#addDemande').modal('hide');
        } else {
          if(response.messages instanceof Object) {
            $.each(response.messages, function(index, value) {
              var id = $("#"+index);
            });
          } else {
            toastr.error(response.messages).show();
             $('#confirmationDemande').modal('hide');
          }
        }
    });

    });