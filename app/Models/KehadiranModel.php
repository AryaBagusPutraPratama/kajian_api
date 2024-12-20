<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KehadiranModel extends Model
{
    use HasFactory;

    protected $table = 'kehadiran';
    protected $guarded = ['id'];

    public function kajian()
    {
        return $this->belongsTo(Kajian::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
