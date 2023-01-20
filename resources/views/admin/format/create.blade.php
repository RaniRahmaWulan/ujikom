@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Format
                    </div>
                    <div class="card-body">
                        <form action="{{ route('format.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Jenis Surat</label>
                                <select type="text" class="form-control  @error('kode_surat') is-invalid @enderror"
                                    name="id_surat">
                                    @foreach($surat as $sur)
                                        <option value="{{$sur->id}}">{{$sur->jenis_surat}} - {{$sur->kode_surat}}</option>
                                    @endforeach
                                </select>
                                @error('id_surat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Divisi</label>
                                <select type="text" class="form-control  @error('divisi') is-invalid @enderror"
                                    name="id_divisi">
                                    @foreach($divisi as $div)
                                        <option value="{{$div->id}}">{{$div->divisi}}</option>
                                    @endforeach
                                </select>
                                @error('id_divisi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Perusahaan</label>
                                <input type="text" class="form-control  @error('perusahaan') is-invalid @enderror"
                                    name="perusahaan">
                                @error('perusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Bulan</label>
                                <select class="form-control @error('bulan') is-invalid @enderror" name="bulan">
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="V" >V</option>
                                <option value="VI">VI</option>
                                <option value="VII">VII</option>
                                <option value="VIII">VIII</option>
                                <option value="IX">IX</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tahun</label>
                                <input type="text" class="form-control  @error('tahun') is-invalid @enderror"
                                    name="tahun">
                                @error('tahun')
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