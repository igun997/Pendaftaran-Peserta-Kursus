<?php

namespace SystemFive\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Http\RedirectResponse;
use \SystemFive\CalonModel;
class Calon extends Controller
{
  public $url ;
  public function __construct(UrlGenerator $url,Request $req)
  {
     $this->url = $url;
     if ($req->session()->get("level") != "peserta") {
       return redirect('/masuk')->send();
     }
  }
  public function home(Request $req)
  {

    $css = [];
    $js = [];
    return view("calon.pages.home")->with(["title"=>"Dashboard Peserta Didik","css"=>$css,"js"=>$js]);
  }
  public function isibio(Request $req)
  {
    $find = \SystemFive\CalonModel::where(["id_user"=>$req->session()->get("id_user")])->get();
    $alert = "";
    $alert_status = 1;
    if (count($find) < 1) {
      $alert_status = 0;
      $alert = "<div class='alert alert-danger'>Biodata Belum Di Isi</div>";
    }else {
      $find = \SystemFive\CalonModel::where(["id_user"=>$req->session()->get("id_user")])->first();
    }
    $css = [];
    $js = [
      $this->url->to("/assets/main/calon/isibio.js")
    ];
    return view("calon.pages.isibio")->with(["title"=>"Isi Biodata Peserta Didik","alert"=>$alert,"css"=>$css,"js"=>$js,"alert_status"=>$alert_status,"data_biodata"=>$find]);
  }
}
