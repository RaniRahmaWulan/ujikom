<?php

namespace App\Http\Controllers;

use App\Models\format;
use App\Models\Investasi;
use Illuminate\Http\Request;

class InvestasiController extends Controller
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
        $format = format::all();
        $investasi = Investasi::orderBy('id' , 'desc')->get();
        return view('admin.investasi.index', compact('investasi','format'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $format = format::all();
        $investasi = Investasi::all();
        return view('admin.investasi.create',compact('format', 'investasi'));
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
            'tanggal_surat' => 'required',
            'id_format' => 'required',
            'nomor' => 'required',
            'tujuan' => 'required',
            'perihal' => 'required',
            'keterangan' => 'required',
        ]);

        $investasi = new Investasi();
        $investasi->tanggal_surat = $request->tanggal_surat;
        $investasi->id_format = $request->id_format;
        $investasi->nomor = $request->nomor;
        $investasi->tujuan = $request->tujuan;
        $investasi->perihal = $request->perihal;
        $investasi->keterangan = $request->keterangan;
        $investasi->save();
        return redirect()->route('format.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investasi  $investasi
     * @return \Illuminate\Http\Response
     */
    public function show(Investasi $investasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investasi  $investasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $investasi = Investasi::findOrFail($id);
        return view('admin.investasi.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investasi  $investasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tanggal_surat' => 'required',
            'id_format' => 'required',
            'nomor' => 'required',
            'tujuan' => 'required',
            'perihal' => 'required',
            'keterangan' => 'required',
        ]);

        $investasi = Investasi::findOrFail($id);
        $investasi->tanggal_surat = $request->tanggal_surat;
        $investasi->id_format = $request->id_format;
        $investasi->nomor = $request->nomor;
        $investasi->tujuan = $request->tujuan;
        $investasi->perihal = $request->perihal;
        $investasi->keterangan = $request->keterangan;
        $investasi->save();
        return redirect()->route('format.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investasi  $investasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $investasi = Investasi::findOrFail($id);
        $investasi->delete();
        return redirect()->route('investasi.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
