$(document).ready(function() {
  console.log("Register.js Run . .");
  $("#register").on('submit', function(event) {
    event.preventDefault();
    dform = $(this).serializeArray();
    console.log(dform);
    $.ajax({
      url: base_url+"api/register",
      type: 'POST',
      dataType: 'json',
      data: dform
    })
    .done(function(d) {
      if (d.status == 1) {
        toastr.success(d.msg);
      }else {
        toastr.error(d.msg);
      }
    })
    .fail(function() {
      toastr.error("Oops Something Wrong !!");
    })
    .always(function() {
      console.log("Request Selesai");
    });

  });
});
