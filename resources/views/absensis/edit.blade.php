@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Update jurusan</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/jurusans">Jurusan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update jurusan </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-description">Update data :</p>
                        <form method="POST" action="/jurusans/{{ $jurusans->jurusan_id }}" class="forms-sample">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Jurusan</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="nama" placeholder="Masukkan nama jurusan" value="{{ old('nama', $jurusans->nama) }}" />
                            </div>

                            <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
