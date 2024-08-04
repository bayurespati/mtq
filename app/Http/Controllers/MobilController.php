<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMobilRequest;
use App\Http\Requests\UpdateMobilRequest;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobil = Mobil::all();
        return view('admin.mobil.index', ['mobil' => $mobil]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMobilRequest $request)
    {
        $model = new Mobil();
        $model->nopol = $request->nopol;
        $model->merek = $request->merek;
        $model->tipe = $request->tipe;
        $model->warna = $request->warna;
        $model->save();
        return redirect()->route('admin-mobil-index')->with(['success' => 'Berhasil input data Mobil']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobil $mobil)
    {
        return view('admin.mobil.edit', ['mobil' => $mobil]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobil $mobil)
    {
        $request->validate((new UpdateMobilRequest())->rules($mobil));
        $mobil->nopol = $request->nopol;
        $mobil->merek = $request->merek;
        $mobil->tipe = $request->tipe;
        $mobil->warna = $request->warna;
        $mobil->save();
        return redirect()->route('admin-mobil-index')->with(['success' => 'Berhasil update data Mobil']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobil $mobil)
    {
        $mobil->delete();
        return redirect()->route('admin-mobil-index')->with(['success' => "Berhasil delete data Mobil"]);
    }
}
