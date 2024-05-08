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
                        <form method="POST" action="/jadwalpelajarans/{{ $jadwalpelajarans->jadwal_pelajaran_id }}" class="forms-sample">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="exampleSelectGender">Mata Pelajaran</label>
                                <select class="form-control" id="exampleSelectGender" name="id_mata_pelajaran">
                                    @foreach ($mapels as $mp)
                                        @if (old('mata_pelajaran_id', $mp->mata_pelajaran_id) == $mp->mata_pelajaran_id)
                                            <option value="{{ $mp->mata_pelajaran_id }}" selected> {{ $mp->judul }} </option>
                                        @else
                                            <option value="{{ $mp->mata_pelajaran_id }}">{{ $mp->judul }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Kelas</label>
                                <select class="form-control" id="exampleSelectGender" name="id_kelas">
                                    @foreach ($kelass as $klss)
                                        @if (old('kelas_id', $klss->kelas_id) == $klss->kelas_id)
                                            <option value="{{ $klss->kelas_id }}" selected> {{ $klss->tahun_ajaran }} {{ $klss->id_jurusan }} </option>
                                        @else
                                            <option value="{{ $klss->kelas_id }}">{{ $klss->tahun_ajaran }} {{ $klss->id_jurusan }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Waktu Mengajar</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="waktu_mengajar" placeholder="Masukkan waktu mengajar" />
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
