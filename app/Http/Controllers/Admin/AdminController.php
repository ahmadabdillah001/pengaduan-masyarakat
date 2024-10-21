<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use App\Models\ComplaintResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function semuaPengaduan()
    {
        $complaints = Complaint::all();
        return view('dashboard.admin-role.semua-pengaduan',[
            'complaints' => $complaints
        ]);
    }

    public function tanggapiPengaduan(Complaint $id_pengaduan)
    {
        return view('dashboard.admin-role.tanggapi-pengaduan',[
            'complaint' => $id_pengaduan
        ]);
    }

    public function storePengaduan(Request $request)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/complaint_responses', $image->hashName());
        }

        Complaint::find($request->complaint_id);

        ComplaintResponse::create([
            'complaint_id'  => $request->complaint_id,
            'user_id'       => Auth::user()->id,
            'response'      => $request->response,
            'image'         => $image->hashName(),
        ]);

        return redirect()->back()->with('msg', 'Pengaduan Ditanggapi!');
    }
}
