@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Divisi
                    </div>
                    <div class="card-body">
                        <form action="{{ route('divisi.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Divisi</label>
                                <input type="text" class="form-control  @error('divisi') is-invalid @enderror"
                                    name="divisi">
                                @error('divisi')
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