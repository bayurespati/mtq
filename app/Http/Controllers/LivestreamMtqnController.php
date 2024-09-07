<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLivestreamMtqnRequest;
use App\Http\Requests\UpdateLivestreamMtqnRequest;
use App\Models\LivestreamMtqn;
use Illuminate\Http\Request;

class LivestreamMtqnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livestream_mtqn = LivestreamMtqn::all();
        return view('admin.livestream_mtqn.index', ['livestream_mtqn' => $livestream_mtqn]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.livestream_mtqn.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLivestreamMtqnRequest $request)
    {
        $model = new LivestreamMtqn();
        $model->nama = $request->nama;
        $model->embed = $request->embed;
        $model->save();
        return redirect()->route('admin-livestream-mtqn-index')->with(['success' => 'Berhasil input data livestream MTQN']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LivestreamMtqn $livestreamMtqn)
    {
        return view('admin.livestream_mtqn.edit', ['livestream_mtqn' => $livestreamMtqn]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LivestreamMtqn $livestreamMtqn)
    {
        $request->validate((new UpdateLivestreamMtqnRequest())->rules($livestreamMtqn));
        $livestreamMtqn->nama = $request->nama;
        $livestreamMtqn->embed = $request->embed;
        $livestreamMtqn->save();
        return redirect()->route('admin-livestream-mtqn-index')->with(['success' => 'Berhasil update data livestream MTQN']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LivestreamMtqn $livestreamMtqn)
    {
        $livestreamMtqn->delete();
        return redirect()->route('admin-livestream-mtqn-index')->with(['success' => "Berhasil delete data livestream MTQN"]);
    }
}
