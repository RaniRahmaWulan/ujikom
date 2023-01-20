<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construc()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $divisi = Divisi::all();
         return view('admin.divisi.index', compact('divisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.divisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validasi
         $validated = $request->validate([
            'divisi' => 'required',
        ]);

        $divisi = new Divisi();
        $divisi->divisi = $request->divisi;
        $divisi->save();
        return redirect()->route('divisi.index')
            ->with('success', 'Data berhasil dibuat!');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $divisi = Divisi::findOrFail($id);
        return view('admin.divisi.edit', compact('divisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
        $validated = $request->validate([
            'divisi' => 'required',
        ]);

        $surat = Divisi::findOrFail($id);
        $divisi->divisi = $request->divisi;
        $divisi->save();
        return redirect()->route('divisi.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $divisi = Divisi::findOrFail($id);
        $divisi->delete();
        return redirect()->route('divisi.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
