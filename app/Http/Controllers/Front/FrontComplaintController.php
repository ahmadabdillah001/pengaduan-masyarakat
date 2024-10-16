<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontComplaintController extends Controller
{
    public function storePengaduan2(Request $request)
    {
        $image = $request->file('image');
        $image->storeAs('public/complaints', $image->hashName());

        $complaint = new Complaint();

        $complaint->title       = $request->title;
        $complaint->guest_name  = $request->name;
        $complaint->guest_email = $request->title;
        $complaint->guest_telp  = $request->telp;
        $complaint->description = $request->description;        
        $complaint->image       = $image->hashName();

        $complaint->save();

        return redirect()->back()->with('msg','Pengaduan anda berhasil dikirim!');
    }

    public function storePengaduan3(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Ambil data pengguna yang login jika ada
        $user = Auth::user();

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/complaints', $image->hashName());
        }

        Complaint::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath ? $image->hashName() : null,
            'user_id' => $user ? $user->id : null, // Set user_id jika pengguna login
            'guest_name' => $user ? $user->name : $request->name, // Ambil nama dari pengguna yang login atau dari input
            'guest_email' => $user ? $user->email : $request->email, // Ambil email dari pengguna yang login atau dari input
            'guest_telp' => $user ? $user->telp : $request->telp, // Ambil telepon dari pengguna yang login atau dari input
        ]);

        return redirect()->back()->with('msg', 'Pengaduan Anda berhasil dikirim!');
    }

    public function storePengaduan(Request $request)
    {
        if (Auth::check()) {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);
        } else {
            $request->validate([
                'name' => 'required|string|max:255',
                'telp' => 'required|string|max:15',
                'email' => 'required|email|max:255',
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);
        }

        $user = Auth::user();

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->storeAs('public/complaints', $image->hashName());
        }

        Complaint::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath ? $image->hashName() : null,
            'user_id' => $user ? $user->id : null, 
            'guest_name' => $user ? $user->name : $request->name,
            'guest_email' => $user ? $user->email : $request->email, 
            'guest_telp' => $user ? $user->telp : $request->telp,
        ]);

        return redirect()->back()->with('msg', 'Pengaduan Anda berhasil dikirim!');
    }


}
