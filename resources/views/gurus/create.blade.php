@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Tambah guru</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/jurusans">Guru</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah guru </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-description">Isi data :</p>
                        <form method="POST" action="{{ route('gurus.store') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">NIP</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="nip" placeholder="Masukkan NIP Guru" />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Nama</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="nama" placeholder="Nama" />
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Gender</label>
                                <select class="form-control" name="jenis_kelamin" id="exampleSelectGender">
                                    <option>Laki-laki / L</option>
                                    <option>Perempuan / P</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputCity1">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputCity1" name="alamat" placeholder="Alamat" />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Agama</label>
                                <input type="text" class="form-control" id="exampleInput1" name="agama" placeholder="Agama" />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3">Status pegawai</label>
                                <input type="text" class="form-control" id="exampleInput2" name="status_pegawai" placeholder="Status pegawai" />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail3">Pendidikan terakhir</label>
                                <input type="text" class="form-control" id="exampleInput2" name="pendidikan_terakhir" placeholder="Pendidikan terakhir" />
                            </div>

                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="photo" class="form-control" accept="image/*"/>
                                {{-- <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Upload foto" />
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                                    </span>
                                </div> --}}
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
