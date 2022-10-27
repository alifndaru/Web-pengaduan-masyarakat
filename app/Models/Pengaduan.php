<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pengaduan',	'user_nik', 'id_tanggapan', 'name', 'description', 'image', 'status','created_at','updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_nik', 'nik');
    }

    public function details()
    {
        return $this->hasMany(Pengaduan::class, 'id_pengaduan', 'id_tanggapan');
    }

    // public function tanggapans()
    // {
    //     return $this->belongsTo(Pengaduan::class, 'id_tanggapan', 'id_pengaduan');
    // }

    // public function tanggapans()
    // {
    //     return $this->hasMany(Tanggapan::class, 'id_tanggapan', 'id_pengaduan');
    // }

}
