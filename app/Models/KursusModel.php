<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KursusModel extends Model
{
    use HasFactory;
    protected $table = 'tabel_kursus';
    protected $primaryKey = 'id_kursus';
    protected $fillable = [
        'judul_kursus',
        'deskripsi_kursus',
        'durasi_kursus'
    ];

    // Relasi one to many dengan tabel materi_kursus
    public function materi()
    {
        return $this->hasMany(MateriModel::class, 'id_kursus', 'id_kursus');
    }
}
