<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $video = Video::all();
        return view('admin.video.index', ['video' => $video]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoRequest $request)
    {
        $model = new Video();
        $model->nama = $request->nama;
        $model->embed = $request->embed;
        $model->save();
        return redirect()->route('admin-video-index')->with(['success' => 'Berhasil input data video']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view('admin.video.edit', ['video' => $video]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $request->validate((new UpdateVideoRequest())->rules($video));
        $video->nama = $request->nama;
        $video->embed = $request->embed;
        $video->save();
        return redirect()->route('admin-video-index')->with(['success' => 'Berhasil update data video']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin-video-index')->with(['success' => "Berhasil delete data video"]);
    }
}
