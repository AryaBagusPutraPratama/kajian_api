<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'admin';  // Nama tabel yang sesuai di database Anda

    // Tentukan kolom yang bisa diisi (optional)
    protected $fillable = ['username', 'password']; // Kolom-kolom di tabel `admin` yang bisa diisi

    // Jika primary key bukan 'id', tentukan di sini
    // protected $primaryKey = 'admin_id';

    // Jika tabel tidak menggunakan kolom timestamps, nonaktifkan
    // public $timestamps = false;
}
