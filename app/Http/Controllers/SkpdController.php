<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkpdRequest;
use App\Http\Requests\UpdateSkpdRequest;
use App\Models\Skpd;
use Illuminate\Http\Request;

class SkpdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skpd = Skpd::all();
        return view('admin.skpd.index', ['skpd' => $skpd]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skpd.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkpdRequest $request)
    {
        $model = new Skpd();
        $model->nama = $request->nama;
        $model->penanggung_jawab = $request->penanggung_jawab;
        $model->phone = $request->phone;
        $model->save();
        return redirect()->route('admin-skpd-index')->with(['success' => 'Berhasil input data SKPD']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skpd $skpd)
    {
        return view('admin.skpd.edit', ['skpd' => $skpd]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skpd $skpd)
    {
        $request->validate((new UpdateSkpdRequest())->rules($skpd));
        $skpd->nama = $request->nama;
        $skpd->penanggung_jawab = $request->penanggung_jawab;
        $skpd->phone = $request->phone;
        $skpd->save();
        return redirect()->route('admin-skpd-index')->with(['success' => 'Berhasil update data SKPD']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skpd $skpd)
    {
        $skpd->delete();
        return redirect()->route('admin-skpd-index')->with(['success' => 'Berhasil delete data SKPD']);
    }
}
