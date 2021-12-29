<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $visible = ['judul', 'isi', 'id_kategori', 'foto', 'nama_penulis', 'tanggal'];
    protected $fillable = ['judul', 'isi', 'id_kategori', 'foto', 'nama_penulis', 'tanggal'];

    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'id_kategori');
    }
}
