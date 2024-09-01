<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faq = Faq::all();
        return view('admin.faq.index', ['faq' => $faq]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
    {
        $faqs = Faq::all();
        if (sizeOf($faqs) >= 8) {
            return redirect()->route('admin-faq-index')->with(['success' => 'Maksimal FAQ 8']);
        }
        $model = new Faq();
        $model->pertanyaan = $request->pertanyaan;
        $model->jawaban = $request->jawaban;
        $model->save();
        return redirect()->route('admin-faq-index')->with(['success' => 'Berhasil input data FAQ']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('admin.faq.edit', ['faq' => $faq]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        $request->validate((new UpdateFaqRequest())->rules($faq));
        $faq->pertanyaan = $request->pertanyaan;
        $faq->jawaban = $request->jawaban;
        $faq->save();
        return redirect()->route('admin-faq-index')->with(['success' => 'Berhasil update data FAQ']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('admin-faq-index')->with(['success' => "Berhasil delete data FAQ"]);
    }
}
