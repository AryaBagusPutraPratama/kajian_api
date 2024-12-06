<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kajian extends Model
{
    use HasFactory;

    protected $table = 'kajian';

    protected $primaryKey = 'kajian_id';

    protected $fillable = [
        'image',
        'title',
        'speaker_name',
        'theme',
        'date',
        'location',
        'start_time',
        'end_time',
    ];
    public function tikets()
    {
    return $this->hasMany(Tiket::class, 'kajian', 'kajian_id');
    }

}
