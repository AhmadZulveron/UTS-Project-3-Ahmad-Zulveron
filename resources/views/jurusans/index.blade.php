@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="page-header flex-wrap">
            <div class="header-left">
                <h3 class="page-title">Jurusan</h3>
            </div>
            <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
                <div class="d-flex align-items-center">
                    <a href="/">
                        <p class="m-0 pr-3">Home</p>
                    </a>
                    <a class="pl-3 mr-4" href="/jurusans">
                        <p class="m-0">Jurusan</p>
                    </a>
                </div>
                <a href="{{ route('jurusans.create') }}" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                    <i class="mdi mdi-plus-circle"></i> Tambahkan
                </a>
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
                        <h4 class="card-title">Daftar Jurusan</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if ($jurusans->isEmpty())
                                        <tr>
                                            <td colspan="3" class="text-center">
                                                Kosong
                                            </td>
                                        </tr>
                                    @else
                                    @foreach ($jurusans as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a href="/jurusans/{{ $item->jurusan_id }}/edit" class="btn btn-dark btn-icon-text">
                                                        <i class="mdi mdi-file-check btn-icon-prepend"></i> Edit
                                                    </a>
                                                </div>
                                                <div class="col-md-2">
                                                    <form action="/jurusans/{{ $item->jurusan_id }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger btn-icon-text" onclick="return confirm('Yakin ingin Hapus data?')">
                                                            <i class="mdi mdi-alert btn-icon-prepend"></i> Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif

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
