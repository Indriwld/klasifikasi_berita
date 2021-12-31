<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        $kategori = Kategori::all();
        return view('berita.index', compact('berita', 'kategori'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('berita.create', compact('kategori'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->id_kategori = $request->id_kategori;

        $berita->foto = $request->foto;
        $berita->nama_penulis = $request->nama_penulis;
        $berita->tanggal = $request->tanggal;
        // upload image / foto
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $foto = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berita/', $foto);
            $berita->foto = $foto;
        }

        $berita->save();
        return redirect()->route('berita.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        $kategori = Kategori::all();
        return view('berita.edit', compact('berita', 'kategori'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->id_kategori = $request->id_kategori;
        $berita->foto = $request->foto;
        $berita->nama_penulis = $request->nama_penulis;
        $berita->tanggal = $request->tanggal;
        // upload image / foto
        if ($request->hasFile('foto')) {
            $berita->deleteImage();
            $image = $request->file('foto');
            $foto = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/berita/', $foto);
            $berita->foto = $foto;
        }

        $berita->save();
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->deleteImage();

        $berita->delete();

        return redirect()->route('berita.index');

    }
}
