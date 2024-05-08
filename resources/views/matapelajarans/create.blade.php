@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Tambah Mata pelajaran</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/matapelajarans">Mata pelajaran</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Mata pelajaran </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-description">Isi data :</p>
                        <form class="forms-sample" method="POST" action="{{ route('matapelajarans.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Judul</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="judul" placeholder="Judul" />
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Pengajar/Guru</label>
                                <select class="form-control" id="exampleSelectGender" name="id_guru">
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
