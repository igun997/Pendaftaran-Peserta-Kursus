$(document).ready(function() {
  console.log("Isibio.js Running . . .");
  $("#save").on('submit', function(event) {
    event.preventDefault();
    toastr.info("Data Dikirim .. ");
    ins = post(base_url+"api/caloninsert",$(this).serializeArray());
    if (ins.status == 1) {
      toastr.success(ins.msg);
      setTimeout(function () {
        location.reload(true);
      }, 1000);
    }else {
      toastr.error(ins.msg);
    }
  });
});
