<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
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
        $surat = Surat::all();
         return view('admin.surat.index', compact('surat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.surat.create');
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
            'jenis_surat' => 'required',
            'kode_surat' => 'required',
        ]);

        $surat = new Surat();
        $surat->jenis_surat = $request->jenis_surat;
        $surat->kode_surat = $request->kode_surat;
        $surat->save();
        return redirect()->route('surat.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $surat = Surat::findOrFail($id);
        return view('admin.surat.edit', compact('surat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         //validasi
         $validated = $request->validate([
            'jenis_surat' => 'required',
            'kode_surat' => 'required',
        ]);

        $surat = Surat::findOrFail($id);
        $surat->jenis_surat = $request->jenis_surat;
        $surat->kode_surat = $request->kode_surat;
        $surat->save();
        return redirect()->route('surat.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $surat = Surat::findOrFail($id);
        $surat->delete();
        return redirect()->route('surat.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
