<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kajian;

class Tiket extends Model
{
    use HasFactory;

    protected $table = 'tiket';

    protected $primaryKey = 'tiket_id';

    protected $fillable = [
        'user',
        'kajian',
    ];

    public function kajian()
    {
        return $this->belongsTo(Kajian::class, 'kajian', 'kajian_id');
    }
}
