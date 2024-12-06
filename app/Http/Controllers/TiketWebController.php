<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\Admin;
use App\Models\User;
use App\Models\Kajian;

class TiketWebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tiket = Tiket::with('kajian')->get();
        $tiket = Kajian::all();
        $admin = Admin::find(1);
        $user = User::all();
        $kajian = Kajian::all();

        return view('datatiket', compact('tiket', 'admin', 'user'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
