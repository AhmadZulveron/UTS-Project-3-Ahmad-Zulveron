@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Tambah kelas</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/kelas">Kelas</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah kelas </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-description">Isi data :</p>
                        <form class="forms-sample" method="POST" action="{{ route('kelas.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Tingkat</label>
                                <input type="text" class="form-control" id="exampleInput1" placeholder="Tingkat" name="tahun_ajaran" />
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Jurusan</label>
                                <select class="form-control" id="exampleSelectGender" name="id_jurusan">
                                    @foreach ($jurusans as $item)
                                        @if (old('jurusan_id') == $item->jurusan_id)
                                            <option value="{{ $item->jurusan_id }}" selected> {{ $item->nama }} </option>
                                        @else
                                            <option value="{{ $item->jurusan_id }}">{{ $item->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Wali kelas</label>
                                <select class="form-control" id="exampleSelectGender" name="wali_kelas">
                                    @foreach ($gurus as $item)
                                        @if (old('nip') == $item->nip)
                                            <option value="{{ $item->nip }}" selected> {{ $item->nama }} </option>
                                        @else
                                            <option value="{{ $item->nip }}">{{ $item->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
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
