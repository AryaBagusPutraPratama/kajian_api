<?php

namespace App\Http\Controllers;

use App\Models\Kajian;
use App\Models\User;
use App\Models\Admin;
use App\Http\Requests\StoreKajianRequest;
use App\Http\Requests\UpdateKajianRequest;

class KajianWebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Admin::find(1); // Sesuaikan ID dengan data admin yang ingin ditampilkan
        $user = User::find(1); 
        // $kajian = Kajian::find(1);
        $kajian = Kajian::all();

        // Kirim data admin ke view welcome
        return view('datakajian', compact('admin', 'user', 'kajian'));
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
    public function store(StoreKajianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kajian $kajian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kajian $kajian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKajianRequest $request, Kajian $kajian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kajian $kajian)
    {
        //
    }
}
