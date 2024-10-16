<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->role == 'admin'){
            $all = Complaint::count();
            $pending = Complaint::where('status', 'pending')->count();
            $proses = Complaint::where('status', 'proses')->count();
            $selesai = Complaint::where('status', 'selesai')->count();
        }else{
            $all = Complaint::where('user_id', Auth::user()->id)->count();
            $pending = Complaint::where('user_id', Auth::user()->id)->where('status', 'pending')->count();
            $proses = Complaint::where('user_id', Auth::user()->id)->where('status', 'proses')->count();
            $selesai = Complaint::where('user_id', Auth::user()->id)->where('status', 'selesai')->count();
        }

        return view('front.statistik', [
            'all' => $all,
            'pending' => $pending,
            'proses' => $proses,
            'selesai' => $selesai,
        ]);
         
    }
}
