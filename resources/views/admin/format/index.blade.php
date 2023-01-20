@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Format Surat yang telah di buat!
                        {{-- <a href="{{ route('format.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a> --}}
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Surat</th>
                                        <th>Divisi</th>
                                        <th>Perusahaan</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Format</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($format as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->Surat->kode_surat }}</td> 
                                            <td>{{ $data->divisi->divisi }}</td>
                                            <td>{{ $data->perusahaan }}</td>
                                            <td>{{ $data->bulan }}</td>
                                            <td>{{ $data->tahun }}</td>
                                            {{-- <td>{{ $data->format }}</td> --}}
                                            {{-- @if($kode_surat == 'BA')
                                            foreach ($kode_surat=BA; $i++)
                                            {
                                                           
                                            }
                                            @endforeach
                                            @endif --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection