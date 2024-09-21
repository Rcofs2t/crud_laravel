<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $kelas = "XXI RPL 1";
        $namasiswa = ["bayu","irzal","javas","brury","salsa"];
        return view('daftarkelas',['kelas' => $kelas , 'namasiswa' => $namasiswa]);
    }
}