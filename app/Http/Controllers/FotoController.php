<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFotoRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Foto;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foto = Foto::all();
        return view('admin.foto.index', ['foto' => $foto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.foto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFotoRequest $request)
    {
        $model = new Foto();
        $model->nama = $request->nama;
        $model->url = Storage::disk('public')->put('media', $request->image);
        $model->save();
        return redirect()->route('admin-foto-index')->with(['success' => 'Berhasil input data foto']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foto $foto)
    {
        $foto->delete();
        return redirect()->route('admin-foto-index')->with(['success' => 'Berhasil hapus data foto']);
    }
}
