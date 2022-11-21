<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pengaduan', 'id_tanggapan', 'name', 'description', 'image', 'status','created_at','updated_at'
    ];
    protected $hidden = [
    
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_nik', 'nik');
    }
    // public function user()
    // {
    //     return $this->hasMany(User::class, 'user_nik')
    // }

    public function details()
    {
        return $this->hasMany(Pengaduan::class, 'id_pengaduan', 'id_tanggapan');
    }

    public function tanggapans()
    {
        return $this->belongsTo(Pengaduan::class, 'id_tanggapan', 'id_pengaduan');
    }
    public function petugas()
    {
        return $this->hasMany(Tanggapan::class, 'id_tanggapan', 'id_pengaduan');
    }
    // public function tanggapan()
    // {
    //     return $this->hasOne(Tanggapan::class, 'id_tanggapan', 'id_pengaduan');
    // }

    // public function status() {
    //     return $this->belongsTo(Tanggapan::class, 'id_tanggapan','status');
    // }

    
    

    // public function tanggapans()
    // {
    //     return $this->belongsTo(Pengaduan::class, 'id_tanggapan', 'id_pengaduan');
    // }

    // public function tanggapans()
    // {
    //     return $this->hasMany(Tanggapan::class, 'id_tanggapan', 'id_pengaduan');
    // }

}
