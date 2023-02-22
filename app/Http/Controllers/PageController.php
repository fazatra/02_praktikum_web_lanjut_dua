<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
    {
        public function index(){
            echo 'Selamat Datang';
        }
    
        public function about(){
            echo 'NIM   : 2141720197 <br> Nama  : M Farhan R P';
        }
    
        public function articles($id){
            echo 'Halaman Artikel dengan Id ' .$id;
        }
    }

