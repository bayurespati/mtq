<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePesanRequest;
use App\Http\Requests\UpdatePesanRequest;
use App\Models\Pesan;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesan = Pesan::all();
        return view('admin.pesan.index', ['pesan' => $pesan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pesan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePesanRequest $request)
    {
        $model = new Pesan();
        $model->nama = $request->nama;
        $model->email = $request->email;
        $model->judul = $request->judul;
        $model->isi = $request->isi;
        $model->save();
        return redirect()->back()->with(['success' => 'Berhasil mengirim pesan']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pesan $pesan)
    {
        return view('admin.pesan.edit', ['pesan' => $pesan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pesan $pesan)
    {
        $request->validate((new UpdatePesanRequest())->rules($pesan));
        $pesan->save();
        return redirect()->route('admin-pesan-index')->with(['success' => 'Berhasil update data pesan']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pesan $pesan)
    {
        $pesan->delete();
        return redirect()->route('admin-pesan-index')->with(['success' => "Berhasil delete data pesan"]);
    }
}
