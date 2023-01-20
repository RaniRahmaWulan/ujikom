<?php

namespace App\Http\Controllers;

use App\Models\format;
use App\Models\surat;
use App\Models\divisi;
use Illuminate\Http\Request;

class FormatController extends Controller
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
        $format = format::all();
        $surat = Surat::all();
        $format = format::orderBy('id' , 'desc')->get();
        return view('admin.format.index', compact('format','surat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $surat = Surat::all();
        $divisi = Divisi::all();
        $format = format::all();
        return view('admin.format.create',compact('surat','divisi', 'format'));
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
            'id_surat' => 'required',
            'id_divisi' => 'required',
            'perusahaan' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
        ]);

        $format = new Format();
        $format->id_surat = $request->id_surat;
        $format->id_divisi = $request->id_divisi;
        $format->perusahaan = $request->perusahaan;
        $format->bulan = $request->bulan;
        $format->tahun = $request->tahun;
        $format->save();
        return redirect()->route('format.index')
            ->with('success', 'Data berhasil dibuat!');
    }
    public function edit()
    {
        //
        return view('admin.format.create');
    }

    public function show()
    {

    }

}
