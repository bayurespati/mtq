<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLivestreamRequest;
use App\Http\Requests\UpdateLivestreamRequest;
use App\Models\Livestream;

class LivestreamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livestream = Livestream::all();
        return view('admin.livestream.index', ['livestream' => $livestream]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.livestream.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLivestreamRequest $request)
    {
        $model = new Livestream();
        $model->nama = $request->nama;
        $model->embed = $request->embed;
        $model->save();
        return redirect()->route('admin-livestream-index')->with(['success' => 'Berhasil input data livestream']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livestream $livestream)
    {
        return view('admin.livestream.edit', ['livestream' => $livestream]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livestream $livestream)
    {
        $request->validate((new UpdateLivestreamRequest())->rules($livestream));
        $livestream->nama = $request->nama;
        $livestream->embed = $request->embed;
        $livestream->save();
        return redirect()->route('admin-livestream-index')->with(['success' => 'Berhasil update data livestream']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livestream $livestream)
    {
        $livestream->delete();
        return redirect()->route('admin-livestream-index')->with(['success' => "Berhasil delete data livestream"]);
    }
}
