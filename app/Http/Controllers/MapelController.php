<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
   
    public function index(){
    $namamapel="Matematika";
    $namapamong=["Ki Sunarto" , "Ki Surahman" , "Ki Fatahillah" , "Nyi Dwinta" , "Nyi anita"];
    return view('mapel',['mapel'=> $namamapel , 'namapamong' => $namapamong]);
}
}