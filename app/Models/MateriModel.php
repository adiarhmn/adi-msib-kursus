<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriModel extends Model
{
    use HasFactory;
    protected $table = 'tabel_materi_kursus';
    protected $primaryKey = 'id_materi_kursus';
    protected $fillable = [
        'id_kursus',
        'judul_materi_kursus',
        'deskripsi_materi_kursus',
        'link_materi_kursus'
    ];

    // Relasi many to one dengan tabel kursus
    public function kursus()
    {
        return $this->belongsTo(KursusModel::class, 'id_kursus', 'id_kursus');
    }
}
