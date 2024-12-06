<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use App\Models\Kajian;

class UserWebController extends Controller
{
    public function showDataPengguna()
    {
        // Ambil data pengguna dari database jika diperlukan
        // Misalnya: $users = User::all();
        // $user = User::find(1);
        $user = User::all();
        $admin = Admin::find(1);
        $kajian = Kajian::find(1);

        // Kirimkan data pengguna ke view jika diperlukan
        // return view('datapengguna', compact('users'));

        // Jika tidak ada data tambahan, cukup kembalikan view
        return view('datapengguna', compact('user', 'admin', 'kajian'));
    }
}
