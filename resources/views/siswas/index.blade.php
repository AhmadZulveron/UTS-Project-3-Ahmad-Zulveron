@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header flex-wrap">
            <div class="header-left">
                <h3 class="page-title">Siswa</h3>
            </div>
            <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
                <div class="d-flex align-items-center">
                    <a href="/">
                        <p class="m-0 pr-3">Home</p>
                    </a>
                    <a class="pl-3 mr-4" href="/siswas">
                        <p class="m-0">Siswa</p>
                    </a>
                </div>
            </div>
        </div>
        {{-- @if (session()->has('pesan'))
            <div class="alert alert-success mt-1" role="alert">
                {{ session('pesan') }}
            </div>
        @endif --}}
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Siswa</h4>
                        <div class="table-responsive">
                            <table class="table table-striped display" id="order-listing">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Foto</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>No Pendaftaran</th>
                                        <th>Kelas</th>
                                        <th>Id Jurusan</th>
                                        <th>Id User</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswas as $item)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="py-1">
                                            <img src="/images/faces-clipart/pic-1.png" alt="image" />
                                        </td>
                                        <td>{{ $item->nis }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->no_telp }}</td>
                                        <td>{{ $item->pendaftaran->no_pendaftaran }}</td>
                                        <td>{{ $item->id_kelas }}</td>
                                        <td>{{ $item->id_jurusan }}</td>
                                        <td>{{ $item->id_user }}</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script> --}}
    <script src="/js/data-table.js"></script>
@endsection
