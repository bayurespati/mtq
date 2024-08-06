<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJadwalRequest;
use App\Http\Requests\UpdateJadwalRequest;
use App\Models\Jadwal;
use App\Models\Lomba;
use Illuminate\Http\Request;
use Carbon\Carbon;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = Jadwal::with('lomba')->get();
        return view('admin.jadwal.index', ['jadwal' => $jadwal]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lomba = Lomba::all();
        return view('admin.jadwal.create', ['lomba' => $lomba]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJadwalRequest $request)
    {

        $date = Carbon::parse($request->tanggal);
        $model = new Jadwal();
        $model->lomba_id = $request->lomba_id;
        $model->tanggal = $date;
        $model->jam_mulai = $request->jam_mulai;
        $model->jam_selesai = $request->jam_selesai;
        $model->save();
        return redirect()->route('admin-jadwal-index')->with(['success' => 'Berhasil input data jadwal']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        $lomba = Lomba::all();
        $jadwal['tanggal_edit'] = Carbon::createFromFormat('Y-m-d', $jadwal->tanggal)->format('m/d/Y');
        return view('admin.jadwal.edit', ['jadwal' => $jadwal, 'lomba' => $lomba]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate((new UpdateJadwalRequest())->rules($jadwal));
        $date = Carbon::parse($request->tanggal);
        $jadwal->lomba_id = $request->lomba_id;
        $jadwal->tanggal = $date;
        $jadwal->jam_mulai = $request->jam_mulai;
        $jadwal->jam_selesai = $request->jam_selesai;
        $jadwal->save();
        return redirect()->route('admin-jadwal-index')->with(['success' => 'Berhasil update data jadwal']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('admin-jadwal-index')->with(['success' => 'Berhasil hapus data jadwal']);
    }
}
