<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.semua-pengaduan');
    }

    public function formPengaduan()
    {
        return view('front.form-pengaduan');
    }

    public function statistik()
    {
        return view('front.statistik');
    }
}
