<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePengumumanRequest;
use App\Http\Requests\UpdatePengumumanRequest;
use App\Models\Pengumuman;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('admin.pengumuman.index', ['pengumuman' => $pengumuman]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePengumumanRequest $request)
    {
        if ($request->is_featured == "on" && $this->countFeatured() >= 5) {
            return redirect()->back()->with(['error' => 'Pengumuman yang tampil didepan maksimal 5']);
        }
        $model = new Pengumuman();
        $model->judul = $request->judul;
        $model->author = $request->author;
        $model->deskripsi = $request->deskripsi;
        $model->image = Storage::disk('public')->put('pengumuman', $request->image);
        $model->is_featured = $request->is_featured == "on" ? 1 : 0;
        $model->save();
        return redirect()->route('admin-pengumuman-index')->with(['success' => 'Berhasil input data pengumuman']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('admin.pengumuman.edit', ['pengumuman' => $pengumuman]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        if ($request->is_featured == "on" && $this->countFeatured() >= 5) {
            return redirect()->back()->with(['error' => 'Pengumuman yang tampil didepan maksimal 5']);
        }
        $request->validate((new UpdatePengumumanRequest())->rules($pengumuman));
        $pengumuman->judul = $request->judul;
        $pengumuman->author = $request->author;
        $pengumuman->deskripsi = $request->deskripsi;
        if ($request->image)
            $pengumuman->image = Storage::disk('public')->put('pengumuman', $request->image);
        $pengumuman->is_featured = $request->is_featured == "on" ? 1 : 0;
        $pengumuman->save();
        return redirect()->route('admin-pengumuman-index')->with(['success' => 'Berhasil update data pengumuman']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman->delete();
        return redirect()->route('admin-pengumuman-index')->with(['success' => "Berhasil delete data pengumuman"]);
    }

    public function countFeatured()
    {
        return Pengumuman::where('is_featured', 1)->get()->count();
    }
}
