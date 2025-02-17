<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return '2341720153 - Aqsa Herry ';
    }
    public function articles($id) {
        return 'Halaman Artikel ke-  '.$id;
    }
}
