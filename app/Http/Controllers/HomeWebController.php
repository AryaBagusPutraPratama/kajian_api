<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Kajian;
use Illuminate\Support\Facades\Auth;

class HomeWebController extends Controller
{
    public function index()
    {
        // Ambil data admin berdasarkan ID, misalnya ID=1
        // $adminId = session('admin_id');
        $admin = Auth::guard('admin')->user(); // Sesuaikan ID dengan data admin yang ingin ditampilkan
        $user = User::find(1); 
        $kajian = Kajian::find(1);

        // Kirim data admin ke view welcome
        return view('welcome', compact('admin', 'user', 'kajian'));
        
    }
}

