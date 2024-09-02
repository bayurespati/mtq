<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLombaRequest;
use App\Http\Requests\UpdateLombaRequest;
use App\Models\Lomba;
use Illuminate\Http\Request;

class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lomba = Lomba::all();
        return view('admin.lomba.index', ['lomba' => $lomba]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lomba.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLombaRequest $request)
    {
        $model = new Lomba();
        $model->nama = $request->nama;
        $model->lokasi = $request->lokasi;
        $model->save();
        return redirect()->route('admin-lomba-index')->with(['success' => 'Berhasil input data lomba']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lomba $lomba)
    {
        return view('admin.lomba.edit', ['lomba' => $lomba]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lomba $lomba)
    {
        $request->validate((new UpdateLombaRequest())->rules($lomba));
        $lomba->nama = $request->nama;
        $lomba->lokasi = $request->lokasi;
        $lomba->save();
        return redirect()->route('admin-lomba-index')->with(['success' => 'Berhasil update data lomba']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lomba $lomba)
    {
        $lomba->delete();
        return redirect()->route('admin-lomba-index')->with(['success' => "Berhasil delete data lomba"]);
    }
}
