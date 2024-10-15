<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRoleController extends Controller
{
    public function riwayatPengaduan()
    {
        $complaints = Complaint::where('user_id', Auth::user()->id)->get();
        return view('dashboard.user-role.riwayat-pengaduan',[
            'complaints' => $complaints,
        ]);
    }
}
