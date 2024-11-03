<?php

namespace App\Http\Controllers\Admin;

use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Models\ComplaintResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Helpers\UpdateStatusComplaintHelper;
use Exception;

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
        DB::beginTransaction();
        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image->storeAs('public/complaint_responses', $image->hashName());
            }
    
            UpdateStatusComplaintHelper::updateStatus($request->complaint_id);
    
            ComplaintResponse::create([
                'complaint_id'  => $request->complaint_id,
                'user_id'       => Auth::user()->id,
                'response'      => $request->response,
                'image'         => $image->hashName(),
            ]);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.semua.pengaduan')->with('msg', 'Pengaduan Gagal Diproses!');
        }
        return redirect()->route('admin.semua.pengaduan')->with('msg', 'Pengaduan Ditanggapi!');
    }

    public function semuaUserPengaduan()
    {
        $complaints = Complaint::all();
        return view('dashboard.admin-role.semua-pengaduan',[
            'complaints' => $complaints
        ]);
    }
}
