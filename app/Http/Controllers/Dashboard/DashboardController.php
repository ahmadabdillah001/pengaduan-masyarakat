<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
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


        return view('dashboard.index', [
            'all' => $all,
            'pending' => $pending,
            'proses' => $proses,
            'selesai' => $selesai,
        ]);
    }
}
