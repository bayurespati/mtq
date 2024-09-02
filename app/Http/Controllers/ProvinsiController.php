<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProvinsiRequest;
use App\Http\Requests\UpdateProvinsiRequest;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinsi = Provinsi::all();
        return view('admin.provinsi.index', ['provinsi' => $provinsi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProvinsiRequest $request)
    {
        $model = new Provinsi();
        $model->nama = $request->nama;
        $model->save();
        return redirect()->route('admin-provinsi-index')->with(['success' => 'Berhasil input data Provinsi']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provinsi $provinsi)
    {
        return view('admin.provinsi.edit', ['provinsi' => $provinsi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provinsi $provinsi)
    {
        $request->validate((new UpdateProvinsiRequest())->rules($provinsi));
        $provinsi->nama = $request->nama;
        $provinsi->save();
        return redirect()->route('admin-provinsi-index')->with(['success' => 'Berhasil update data Provinsi']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provinsi $provinsi)
    {
        $provinsi->delete();
        return redirect()->route('admin-provinsi-index')->with(['success' => "Berhasil delete data Provinsi"]);
    }
}
