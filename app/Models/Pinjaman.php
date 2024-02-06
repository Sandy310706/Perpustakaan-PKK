<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function buku()
    {
        return $this->belongsToMany(Buku::class);
    }
}
