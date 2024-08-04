<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSopirRequest;
use App\Http\Requests\UpdateSopirRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Sopir;
use App\Models\Mobil;
use App\Models\User;

class SopirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sopir = Sopir::with(['user', 'mobil'])->get();
        return view('admin.sopir.index', ['sopir' => $sopir]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mobil = Mobil::all();
        return view('admin.sopir.create', ['mobil' => $mobil]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSopirRequest $request)
    {
        DB::transaction(function () use ($request) {
            $user = new User();
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->role_id = 3;
            $user->password = bcrypt($request->password);
            $user->save();

            $model = new Sopir();
            $model->user_id = $user->id;
            $model->mobil_id = $request->mobil_id;
            $model->save();
        });

        return redirect()->route('admin-sopir-index')->with(['success' => 'Berhasil input data Sopir']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sopir $sopir)
    {
        $mobil = Mobil::all();
        $data = Sopir::where('id', $sopir->id)->with(['user', 'mobil'])->first();
        return view('admin.sopir.edit', ['sopir' => $data, 'mobil' => $mobil]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sopir $sopir)
    {
        $request->validate((new UpdateSopirRequest())->rules($sopir));
        DB::transaction(function () use ($request, $sopir) {
            $user = User::where('id', $sopir->user_id)->first();
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->save();

            $sopir->mobil_id = $request->mobil_id;
            $sopir->save();
        });
        return redirect()->route('admin-sopir-index')->with(['success' => 'Berhasil update data Sopir']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sopir $sopir)
    {
        DB::transaction(function () use ($sopir) {
            $user = User::where('id', $sopir->user_id)->first();
            $user->delete();
            $sopir->delete();
        });
        return redirect()->route('admin-sopir-index')->with(['success' => 'Berhasil hapus data Sopir']);
    }
}
