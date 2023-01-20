@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Investasi Surat
                        <a href="{{ route('investasi.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Surat</th>
                                        <th>Nomor</th>
                                        <th>Kode</th>
                                        <th>Perusahaan</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Nomor Surat</th>
                                        <th>Tujuan</th>
                                        <th>Perihal</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($investasi as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->tanggal_surat }}</td>
                                            <td>{{ $data->perusahaan }}</td>
                                            <td>{{ $data->format->Surat->kode_surat }}</td> 
                                            <td>{{ $data->format->divisi->divisi }}</td>
                                            <td>{{ $data->format->perusahaan }}</td>
                                            <td>{{ $data->format->bulan }}</td>
                                            <td>{{ $data->format->tahun }}</td>
                                            <td>{{ $data->nomor }}</td>
                                            <td>{{ $data->tujuan }}</td>
                                            <td>{{ $data->perihal }}</td>
                                            <td>{{ $data->keterangan }}</td>
                                            <td>
                                                <form action="{{ route('investasi.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('investasi.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
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