<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $complaints = Complaint::all();
        // return $complaints;
        return view('front.semua-pengaduan',[
            'complaints' => $complaints,
        ]);
    }

    public function formPengaduan()
    {
        return view('front.form-pengaduan');
    }

    public function statistikPengaduan()
    {
        return view('front.statistik');
    }
}
