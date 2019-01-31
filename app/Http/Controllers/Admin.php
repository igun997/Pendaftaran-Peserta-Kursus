<?php

namespace SystemFive\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
class Admin extends Controller
{
  public $url ;
  public function __construct(UrlGenerator $url,Request $req)
  {
     $this->url = $url;
     if ($req->session()->get("level") != "admin") {
       return redirect('/masuk')->send();
     }
  }
  public function home(Request $req)
  {
    $css = [];
    $js = [];
    return view("admin.pages.home")->with(["title"=>"Dashboard Adminstrator","css"=>$css,"js"=>$js]);
  }
  public function calon(Request $req)
  {
    $css = [];
    $js = [
      $this->url->to("/assets/main/admin/calon.js")
    ];
    return view("admin.pages.calon")->with(["title"=>"Dashboard Adminstrator","css"=>$css,"js"=>$js]);
  }
}
