<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLoRequest;
use App\Http\Requests\UpdateLoRequest;
use Illuminate\Http\Request;
use App\Models\Lo;
use App\Models\Skpd;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lo = Lo::with(['user', 'skpd'])->get();
        return view('admin.lo.index', ['lo' => $lo]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skpd = Skpd::all();
        return view('admin.lo.create', ['skpd' => $skpd]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLoRequest $request)
    {
        DB::transaction(function () use ($request) {
            $user = new User();
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->role_id = 4;
            $user->password = bcrypt($request->password);
            $user->save();

            $model = new Lo();
            $model->user_id = $user->id;
            $model->skpd_id = $request->skpd_id;
            $model->save();
        });

        return redirect()->route('admin-lo-index')->with(['success' => 'Berhasil input data LO']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lo $lo)
    {
        $skpd = Skpd::all();
        $data = Lo::where('id', $lo->id)->with(['user', 'skpd'])->first();
        return view('admin.lo.edit', ['lo' => $data, 'skpd' => $skpd]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lo $lo)
    {
        $request->validate((new UpdateLoRequest())->rules($lo));
        DB::transaction(function () use ($request, $lo) {
            $user = User::where('id', $lo->user_id)->first();
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->save();

            $lo->skpd_id = $request->skpd_id;
            $lo->save();
        });
        return redirect()->route('admin-lo-index')->with(['success' => 'Berhasil update data LO']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lo $lo)
    {
        DB::transaction(function () use ($lo) {
            $user = User::where('id', $lo->user_id)->first();
            $user->delete();
            $lo->delete();
        });
        return redirect()->route('admin-lo-index')->with(['success' => 'Berhasil hapus data LO']);
    }
}
