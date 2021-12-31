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
    public function image()
    {
        if ($this->foto && file_exists(public_path('image/berita/' . $this->foto))) {
            return asset('image/berita/' . $this->foto);
        } else {
            return asset('image/no_image.png');
        }
    }
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('image/berita/' . $this->foto))) {
            return unlink(public_path('image/berita/' . $this->foto));
        }
    }
}
