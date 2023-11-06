<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    use HasFactory;

    protected $table = 'kartu';

    protected $fillabel = [
        'kode', 'nama', 'diskon', 'iuran'
    ];

    public function pelanggan(){
        return sthis->hasMany(Pelanggan::class);
    }
}
