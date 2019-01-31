<?php

namespace SystemFive\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
class Landing extends Controller
{
    public $url ;
    public function __construct(UrlGenerator $url)
    {
       $this->url = $url;
    }
    public function home()
    {
      return view("landing.pages.home")->with(["title"=>"S5 IT Consultant - Sell Your Youth for Great Knowledge","css"=>[],"js"=>[]]);
    }
    public function login()
    {
      $css = [];
      $js = [
        $this->url->to('/assets/main/landing/login.js')
      ];
      return view("landing.pages.login")->with(["title"=>"Halaman Masuk","css"=>$css,"js"=>$js]);
    }
    public function register()
    {
      $css = [];
      $js = [
        $this->url->to('/assets/main/landing/register.js')
      ];
      return view("landing.pages.register")->with(["title"=>"Halaman Pendaftaran","css"=>$css,"js"=>$js]);
    }
}
