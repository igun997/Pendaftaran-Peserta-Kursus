$(document).ready(function() {
  $("#login").on('submit', function(event) {
    event.preventDefault();
    dform = $(this).serializeArray();
    console.log(dform);
    $.ajax({
      url: base_url+"api/login",
      type: 'POST',
      dataType: 'json',
      data: dform
    })
    .done(function(d) {
      if (d.status == 1) {
        toastr.success(d.msg);
        setTimeout(function () {
          red = "admin";
          if (d.path == "peserta") {
            red = "calon";
          }
          location.href = base_url+red;
        }, 1000);
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
