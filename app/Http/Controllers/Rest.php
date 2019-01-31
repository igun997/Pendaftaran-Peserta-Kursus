<?php

namespace SystemFive\Http\Controllers;
use \SystemFive\CalonModel;
use \SystemFive\UserModel;
use Illuminate\Http\Request;
use Hash;

class Rest extends Controller
{
    public $user;
    public $calon;
    public function __construct()
    {
      $this->user = new UserModel();
      $this->calon = new CalonModel();
    }
    private function datatablesConvert($res=[],$select="")
    {
      $data = [];
      $data["data"] = [];
      foreach ($res as $key => $value) {
        $inner = [];
        $exp = explode(",",$select);
        foreach ($exp as $k => $v) {
          $inner[] = $value["$v"];
        }
        $data["data"][] = $inner;
      }
      return $data;
    }
    private function select2Convert($data=[],$op=[])
    {
      $s = [];
      $s[] = ["text"=>"== Pilih ==","id"=>""];
      foreach ($data as $key => $value) {
        $s[] = ["text"=>$value[$op["text"]],"id"=>$value[$op["id"]]];
      }
      return $s;
    }
    private function res($array)
    {
      return response($array,200)->header('Content-Type', 'application/json');
    }
    private function isAdmin(Request $res)
    {
      return ($res->session()->get('type') != "admin");
    }
    public function isAll(Request $res)
    {
      return ($res->session()->get('type') != null);
    }
    private function isPeserta(Request $res)
    {
      return ($res->session()->get('type') != "peserta");
    }
    //Public API
    public function signin(Request $req)
    {
      $cek = \SystemFive\UserModel::where(['username'=>$req->input("username")])->get();
      $data = $cek->toArray();
      if (count($data) > 0) {
        $cekHash = Hash::check($req->input("password"),$data[0]["password"]);
        if ($cekHash) {
          session($data[0]);
          return $this->res(["status"=>1,"msg"=>"Username dan Password Benar","path"=>$data[0]["level"]]);
        }else {
          return $this->res(["status"=>0,"msg"=>"Password Salah","debug"=>$cekHash]);
        }
      }else {
        return $this->res(["status"=>0,"msg"=>"Username Salah","debug"=>$data]);
      }
    }
    public function register(Request $req)
    {
      $data = $req->all();
      $data["level"] = "peserta";
      $data["password"] = bcrypt($data["password"]);
      $ins = \SystemFive\UserModel::insert($data);
      if ($ins) {
        return $this->res(["status"=>1,"msg"=>"Pendaftaran Sukses<br>Silahkan Login Menggunakan Akun Tersebut"]);
      }else {
        return $this->res(["status"=>0,"msg"=>"Pendaftaran Gagal"]);
      }
    }
    //Admin API
    public function userinsert(Request $req)
    {
      if ($this->isAdmin($req)) {
        return $this->res(["status"=>0,"msg"=>"No Session Detected","debug"=>$req->session()->all()]);
      }
      $model = $this->user;
      $model->username = $req->input("username");
      $model->password = bcrypt($req->input("password"));
      $model->level = $req->input("level");
      $model->email = $req->input("email");
      $save = $model->save();
      if ($save) {
        return $this->res(["status"=>1,"msg"=>"Sukses Tambah User"]);
      }else {
        return $this->res(["status"=>0,"msg"=>"Gagal Tambah User"]);
      }
    }
    public function userdelete(Request $req,$id)
    {
      if ($this->isAdmin($req)) {
        return $this->res(["status"=>0,"msg"=>"No Session Detected","debug"=>$req->session()->all()]);
      }
      if (!is_numeric($id) && $id < 1) {
        return $this->res(["status"=>0,"msg"=>"Kagak Ada ID 0 OM Balik Lagi Sono"]);
      }
      $model = \SystemFive\UserModel::find($id);
      $del = $model->delete();
      if ($del) {
        return $this->res(["status"=>1,"msg"=>"Sukses Hapus User"]);
      }else {
        return $this->res(["status"=>0,"msg"=>"Gagal Hapus User"]);
      }
    }
    public function userupdate(Request $req)
    {
      if ($this->isAdmin($req)) {
        return $this->res(["status"=>0,"msg"=>"No Session Detected","debug"=>$req->session()->all()]);
      }
      $model = \SystemFive\UserModel::find($req->input("id_user"));
      $model->username = $req->input("username");
      $model->password = bcrypt($req->input("password"));
      $model->level = $req->input("level");
      $model->email = $req->input("email");
      $save = $model->save();
      if ($save) {
        return $this->res(["status"=>1,"msg"=>"Sukses Ubah User"]);
      }else {
        return $this->res(["status"=>0,"msg"=>"Gagal Ubah User"]);
      }
    }
    public function userread(Request $req)
    {
      if ($this->isAdmin($req)) {
        return $this->res(["status"=>0,"msg"=>"No Session Detected","debug"=>$req->session()->all()]);
      }
      $data = \SystemFive\UserModel::select('id_user','username','level','email','created_at','updated_at')->get();
      $res = $data->toArray();
      return $this->res($this->datatablesConvert($res,"id_user,username,email,level,created_at,updated_at"));
    }
    public function caloninsert(Request $req)
    {
      if ($this->isAdmin($req)) {
        return $this->res(["status"=>0,"msg"=>"No Session Detected","debug"=>$req->session()->all()]);
      }
      $model = $this->peserta;
      $model->id_user = $req->input("id_user");
      $model->nama_lengkap = $req->input("nama_lengkap");
      $model->jk = $req->input("jk");
      $model->alamat = $req->input("alamat");
      $save = $model->save();
      if ($save) {
        return $this->res(["status"=>1,"msg"=>"Sukses Tambah Biodata"]);
      }else {
        return $this->res(["status"=>0,"msg"=>"Gagal Tambah Biodata"]);
      }
    }
    public function calondelete(Request $req,$id)
    {
      if ($this->isAdmin($req)) {
        return $this->res(["status"=>0,"msg"=>"No Session Detected","debug"=>$req->session()->all()]);
      }
      if (!is_numeric($id) && $id < 1) {
        return $this->res(["status"=>0,"msg"=>"Kagak Ada ID 0 OM Balik Lagi Sono"]);
      }
      $model = \SystemFive\CalonModel::find($id);
      $del = $model->delete();
      if ($del) {
        return $this->res(["status"=>1,"msg"=>"Sukses Hapus Biodata Peserta"]);
      }else {
        return $this->res(["status"=>0,"msg"=>"Gagal Hapus Biodata Peserta"]);
      }
    }
    public function calonupdate(Request $req)
    {
      if ($this->isAdmin($req)) {
        return $this->res(["status"=>0,"msg"=>"No Session Detected","debug"=>$req->session()->all()]);
      }
      $model = \SystemFive\CalonModel::find($req->input("id_calon"));
      $model->id_user = $req->input("id_user");
      $model->nama_lengkap = $req->input("nama_lengkap");
      $model->jk = $req->input("jk");
      $model->alamat = $req->input("alamat");
      $save = $model->save();
      if ($save) {
        return $this->res(["status"=>1,"msg"=>"Sukses Ubah Biodata Calon"]);
      }else {
        return $this->res(["status"=>0,"msg"=>"Gagal Ubah Biodata Calon"]);
      }
    }
    public function calonread(Request $req,$id)
    {
      if ($this->isAdmin($req)) {
        return $this->res(["status"=>0,"msg"=>"No Session Detected","debug"=>$req->session()->all()]);
      }
      $data = \SystemFive\UserModel::find($id)->first();
      if (count($data) > 0) {
        return $this->res($data);
      }else {
        return $this->res(["status"=>0,"msg"=>"No Data"]);
      }
    }

}
