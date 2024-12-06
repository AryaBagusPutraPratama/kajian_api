<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;


class AdminWebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            // Ambil data admin berdasarkan ID, misalnya ID=1
            $admin = Admin::find(1); // Sesuaikan ID dengan data admin yang ingin ditampilkan
    
            // Kirim data admin ke view welcome
            return view('welcome', compact('admin'));
        }
    }

    public function showlogin() {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::guard('admin')->login($admin);
            // session(['username' => $admin->username]);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['loginError' => 'Username atau password salah!']);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreAdminRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $admin = Admin::find($id);

        if ($admin) {
            return view('welcome', compact('admin'));
        } else {
            return redirect()->route('home')->with('error', 'Admin not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateAdminRequest $request, Admin $admin)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
