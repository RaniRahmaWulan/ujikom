@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data SUrat
                    </div>
                    <div class="card-body">
                        <form action="{{ route('surat.update', $surat->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Jenis Surat</label>
                                <input type="text" class="form-control  @error('jenis_surat') is-invalid @enderror"
                                    name="jenis_surat" value="{{ $surat->jenis_surat }}">
                                @error('jenis_surat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kode surat</label>
                                <input type="text" class="form-control  @error('kode_surat') is-invalid @enderror"
                                    name="kode_surat" value="{{ $surat->kode_surat }}">
                                @error('kode_surat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection