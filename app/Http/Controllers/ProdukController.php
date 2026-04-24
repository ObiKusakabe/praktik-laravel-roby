<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        return "Ini adalah halaman produk";
    }
    public function show(){
        return "Ini adalah halaman show produk";
    }
    public function view(){
        return "Ini adalah halaman view produk";
    }
}
