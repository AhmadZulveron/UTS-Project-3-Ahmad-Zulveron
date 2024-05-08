@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Update nilai</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/nilais">Nilai</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update nilai </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-description">Update data :</p>
                        <form method="POST" action="/nilais/{{ $nilais->nilai_id }}" class="forms-sample">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputName1">Nama Siswa</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="id_siswa" placeholder="Masukkan nama siswa" value="{{ old('id_siswa', $nilais->id_siswa) }}" readonly />
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Mata pelajaran</label>
                                <select class="form-control" id="exampleSelectGender" name="id_mata_pelajaran" @readonly(true)>
                                    @foreach ($mapels as $matpel)
                                        @if (old('mata_pelajaran_id', $matpel->mata_pelajaran_id) == $matpel->mata_pelajaran_id)
                                            <option value="{{ $matpel->mata_pelajaran_id }}" selected> {{ $matpel->judul }} </option>
                                        @else
                                            <option value="{{ $matpel->mata_pelajaran_id }}">{{ $matpel->judul }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Nilai</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="nilai" placeholder="Masukkan nilai" value="{{ old('id_siswa', $nilais->nilai) }}" />
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
