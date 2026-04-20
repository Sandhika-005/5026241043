<?php
//package untuk controller
namespace App\Http\Controllers;

//import class Request

use Illuminate\Http\Request;
//membuat class DosenController

class DosenController extends Controller
{
    // membuat method index

    public function index(){
    return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
    }

    public function biodata(){
    	$nama = "Diki Alfarabi Hadi";
        $umur = 35;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

    	return view('biodata',['nama' => $nama, 'umur' => $umur, 'matkul' => $pelajaran]);
    }
}
