@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Tambah nilai</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/jurusans">Nilai</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah nilai </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-description">Isi data :</p>
                        <form method="POST" action="{{ route('nilais.store') }}" class="forms-sample">
                            @csrf

                            {{-- <div class="form-group">
                                <label for="exampleSelectGender">Nama Siswa</label>
                                <select class="form-control" id="exampleSelectGender" name="id_siswa">
                                    @foreach ($siswas as $item)
                                        @if (old('nis') == $item->nis)
                                            <option value="{{ $item->nis }}" selected> {{ $item->nama }} </option>
                                        @else
                                            <option value="{{ $item->nis }}">{{ $item->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div> --}}

                            <div class="form-group">
                                <label for="exampleInputName1">Nama Siswa</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="id_siswa" placeholder="Masukkan nama siswa" />
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Mata pelajaran</label>
                                <select class="form-control" id="exampleSelectGender" name="id_mata_pelajaran">
                                    @foreach ($mapels as $matpel)
                                        @if (old('mata_pelajaran_id') == $matpel->mata_pelajaran_id)
                                            <option value="{{ $matpel->mata_pelajaran_id }}" selected> {{ $matpel->judul }} </option>
                                        @else
                                            <option value="{{ $matpel->mata_pelajaran_id }}">{{ $matpel->judul }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Nilai</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="nilai" placeholder="Masukkan nilai" />
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
