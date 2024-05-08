@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Tambah jurusan</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/jurusans">Jurusan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah jurusan </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-description">Isi data :</p>
                        <form method="POST" action="{{ route('jurusans.store') }}" class="forms-sample">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Jurusan</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="nama" placeholder="Masukkan nama jurusan" />
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
