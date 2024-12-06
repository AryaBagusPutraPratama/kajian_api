<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class UploadController extends Controller
{
    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'image' => 'required|image|', // Atur validasi sesuai kebutuhan
        ]);

        // Upload gambar
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public'); // Simpan di folder public/images
            
            // Simpan path ke database jika perlu
            // Contoh:
            // ImageModel::create(['path' => $path]);
            Log::info("Image path: " . $path); // Tambahkan log
            Upload::create(['path' => $path]);

            return response()->json(['path' => $path], 200); // Kembalikan path gambar
        }

        return response()->json(['error' => 'No image uploaded'], 400);
    }
}
