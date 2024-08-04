<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        return view('admin.berita.index', ['berita' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBeritaRequest $request)
    {
        $model = new Berita();
        $model->judul = $request->judul;
        $model->author = $request->author;
        $model->deskripsi = $request->deskripsi;
        $model->image = Storage::disk('public')->put('berita', $request->image);
        $model->save();
        return redirect()->route('admin-berita-index')->with(['success' => 'Berhasil input data berita']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', ['berita' => $berita]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $request->validate((new UpdateBeritaRequest())->rules($berita));
        $berita->judul = $request->judul;
        $berita->author = $request->author;
        $berita->deskripsi = $request->deskripsi;
        if ($request->image)
            $berita->image = Storage::disk('public')->put('berita', $request->image);
        $berita->save();
        return redirect()->route('admin-berita-index')->with(['success' => 'Berhasil update data berita']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->route('admin-berita-index')->with(['success' => "Berhasil delete data berita"]);
    }
}
