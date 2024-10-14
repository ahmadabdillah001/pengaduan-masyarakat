<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $complains = Complaint::all();
        return view('front.semua-pengaduan', [
            'jarwos' => $complains,
        ]);
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
