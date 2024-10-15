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
        $all = Complaint::where('user_id', Auth::user()->id)->count();
        $pending = Complaint::where('user_id', Auth::user()->id)->where('status', 'pending')->count();
        $proses = Complaint::where('user_id', Auth::user()->id)->where('status', 'proses')->count();
        $selesai = Complaint::where('user_id', Auth::user()->id)->where('status', 'selesai')->count();
        return view('dashboard.index',[
            'pending' => $pending,
        ]);
    }
}
