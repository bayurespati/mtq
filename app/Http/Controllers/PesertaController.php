<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePesertaRequest;
use App\Http\Requests\UpdatePesertaRequest;
use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Provinsi;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Peserta::with(['user', 'provinsi'])->get();
        return view('admin.peserta.index', ['peserta' => $peserta]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinsi = Provinsi::all();
        return view('admin.peserta.create', ['provinsi' => $provinsi]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePesertaRequest $request)
    {
        DB::transaction(function () use ($request) {
            $user = new User();
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->role_id = 3;
            $user->password = bcrypt($request->password);
            $user->save();

            $model = new Peserta();
            $model->user_id = $user->id;
            $model->provinsi_id = $request->provinsi_id;
            $model->save();
        });

        return redirect()->route('admin-peserta-index')->with(['success' => 'Berhasil input data Peserta']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peserta $peserta)
    {
        $provinsi = Provinsi::all();
        $data = Peserta::where('id', $peserta->id)->with(['user', 'provinsi'])->first();
        return view('admin.peserta.edit', ['peserta' => $data, 'provinsi' => $provinsi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peserta $peserta)
    {
        $request->validate((new UpdatePesertaRequest())->rules($peserta));
        DB::transaction(function () use ($request, $peserta) {
            $user = User::where('id', $peserta->user_id)->first();
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->save();

            $peserta->provinsi_id = $request->provinsi_id;
            $peserta->save();
        });
        return redirect()->route('admin-peserta-index')->with(['success' => 'Berhasil update data Peserta']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peserta $peserta)
    {
        DB::transaction(function () use ($peserta) {
            $user = User::where('id', $peserta->user_id)->first();
            $user->delete();
            $peserta->delete();
        });
        return redirect()->route('admin-peserta-index')->with(['success' => 'Berhasil hapus data Peserta']);
    }
}
