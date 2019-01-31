$(document).ready(function() {
  console.log("Calon.js Running . . .");
  table_main = $("#main").DataTable({
    ajax:base_url+"api/datacalon",
    createdRow:function(r,d,i){
      console.log(d);
      status = "Sudah Di Isi";
      if (d[3] == null) {
        status = "Belum Isi";
      }
      $("td",r).eq(3).html(status);
    }
  });
  $("#main").on('click','tbody tr',function(event) {
    event.preventDefault();
      var data = table_main.row(this).data();
      console.log(data);
      var dialog = bootbox.dialog({
        title: 'Prepare Menu ',
        message: '<p><center><i class="fa fa-spin fa-spinner"></i> Loading...</center></p>'
      });
      dialog.init(function() {
        setTimeout(function() {
            dialog.find(".modal-title").html("Pilih Opsi");
            $build = [
              "<div class='row'>",
              "<div class='col-md-12'>",
              "<div class='form-group'>",
              "<button class='btn btn-primary btn-block' id='lihat'>Lihat Biodata</button>",
              "</div>",
              "<div class='form-group'>",
              "<button class='btn btn-warning btn-block' id='update'>Update</button>",
              "</div>",
              "<div class='form-group'>",
              "<button class='btn btn-danger btn-block' id='hapus'>Hapus</button>",
              "</div>",
              "</div>",
              "</div>",
            ];
            dialog.find(".bootbox-body").html($build.join(""));
            dialog.find("#hapus").on('click', function(event) {
              event.preventDefault();
              c = confirm("Apakah Anda Yakin ? ");
              if (c) {
                del = get(base_url+"api/userdelete/"+data[0]+"?_token="+csrf_token);
                if (del.status == 1) {
                  bootbox.hideAll();
                  table_main.ajax.reload();
                  toastr.success(del.msg);
                }else {
                  toastr.error(del.msg);
                }
              }
            });
            dialog.find("#update").on('click',function(event) {
              event.preventDefault();
              if (data[3] == null) {
                toastr.error("Biodata Peserta Belum Di Isi !");
                bootbox.hideAll();
              }else {
                d = get(base_url+"api/detildatacalon/"+data[0]);
                if (d.status == 1) {
                  toastr.info(d.msg);
                  dialog.find(".modal-title").html("Update Biodata ID "+data[0]);
                  form = [[{
                    label:"Nama Lengkap",
                    type:"text",
                    value:d.data.nama_lengkap,
                    name:"nama_lengkap"
                  },{
                    label:"Jenis Kelamin",
                    type:"select2",
                    name:"jk",
                    id:"jk"
                  },{
                    label:"Alamat",
                    type:"textarea",
                    value:d.data.alamat,
                    name:"alamat"
                  }]];
                  btn = {name:"Update",class:"warning",type:"submit"};
                  html = builder(form,btn,"save",true,12);
                  dialog.find(".bootbox-body").html("<div class='row'>"+html+"</div>");
                  selectbuilder([{text:"Laki-Laki",value:"laki-laki"},{text:"Perempuan",value:"Perempuan"}],dialog.find("#jk"),[{text:ucfirst(d.data.jk),value:d.data.jk}]);
                  dialog.find("#save").on('submit', function(event) {
                    event.preventDefault();
                    dform = $(this).serializeArray();
                    dform[dform.length] = {name:"id_calon",value:d.data.id_calon};
                    dform[dform.length] = {name:"id_user",value:data[0]};
                    console.log(dform);
                    up = post(base_url+"api/calonupdate",dform);
                    if (up.status == 1) {
                      bootbox.hideAll();
                      table_main.ajax.reload();
                      toastr.success(up.msg);
                    }else {
                      toastr.error(up.msg);
                    }
                  });
                }else {
                  bootbox.hideAll();
                  toastr.error(d.msg);
                }
              }
            });
            dialog.find("#lihat").on('click',function(event) {
              event.preventDefault();
              if (data[3] == null) {
                toastr.error("Biodata Peserta Belum Di Isi !");
                bootbox.hideAll();
              }else {
                d = get(base_url+"api/detildatacalon/"+data[0]);
                if (d.status == 1) {
                  toastr.info(d.msg);
                  dialog.find(".modal-title").html("Biodata ID "+data[0]);
                  $build = [
                    "<div class='row'>",
                    "<div class='col-md-12'>",
                    "<div class='form-group'>",
                    "<label>Nama Lengkap</label>",
                    "<input disabled class='form-control' value='"+d.data.nama_lengkap+"' />",
                    "</div>",
                    "<div class='form-group'>",
                    "<label>Foto</label><br>",
                    "<img src='"+base_url+d.data.foto+"' style='width:auto;height:100px' />",
                    "</div>",
                    "<div class='form-group'>",
                    "<label>Jenis Kelamin</label>",
                    "<input disabled class='form-control' value='"+ucfirst(d.data.jk)+"' />",
                    "</div>",
                    "<div class='form-group'>",
                    "<label>Alamat</label>",
                    "<textarea disabled  class='form-control'>"+d.data.alamat+"</textarea>",
                    "</div>",
                    "</div>",
                    "</div>",
                  ];
                  dialog.find(".bootbox-body").html($build.join(""));
                }else {
                  bootbox.hideAll();
                  toastr.error(d.msg);
                }
              }
            });
        },2000);
      });
  });
});
