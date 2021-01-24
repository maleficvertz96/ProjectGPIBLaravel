<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ibadahminggu extends Model
{
    protected $fillable = [
        'nama', 'tanggal', 'ibadah', 'waktu', 'acara',
    ];
}
