<?php

namespace SystemFive\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
class Admin extends Controller
{
  public $url ;
  public function __construct(UrlGenerator $url)
  {
     $this->url = $url;
     if ($req->session()->get("level") != "peserta") {
       return redirect('/masuk')->send();
     }
  }
}
