@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Siswa</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/siswas">Siswa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pendaftaran Siswa </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pendaftaran Siswa</h4>
                        <p class="card-description">Isi data diri Anda :</p>
                        <form method="POST" action="{{ route('pendaftarans.store') }}" class="forms-sample">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Nama</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama_siswa" />
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectGender">Gender</label>
                                <select class="form-control" id="exampleSelectGender" name="jenis_kelamin">
                                    <option>Laki-laki / L</option>
                                    <option>Perempuan / P</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Tempat Lahir</label>
                                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Tempat lahir" name="tempat_lahir" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDate1">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="exampleInputDate1" name="tgl_lahir" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity1">Agama</label>
                                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Agama" name="agama" />
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Alamat Siswa</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4" name="alamat_siswa"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity2">Sekolah Asal</label>
                                <input type="text" class="form-control" id="exampleInputCity2" placeholder="Sekolah asal" name="sekolah_asal" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCity3">No Telepon Siswa</label>
                                <input type="text" class="form-control" id="exampleInputCity3" placeholder="08xxxxxxx" name="no_telp" />
                            </div>
                            <div class="form-group">
                                <label>Uplodad Foto</label>
                                <input type="file" name="photo" class="form-control"/>
                                {{-- <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Upload foto" />
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button"> Upload </button>
                                    </span>
                                </div> --}}
                            </div>
                            <button type="submit" class="btn btn-primary mr-2"> Simpan </button>
                            <button class="btn btn-light">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
