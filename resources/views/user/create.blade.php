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
                        <form method="POST" action="{{ route('users.store') }}" class="forms-sample">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputName">Username</label>
                                <input type="text" class="form-control" id="exampleInputName" name="username" placeholder="Masukkan Username" />
                            </div>

                            {{-- <div class="form-group">
                                <label for="exampleSelectGender">Mata pelajaran</label>
                                <select class="form-control" id="exampleSelectGender" name="id_mata_pelajaran">
                                    @foreach ($users as $user)
                                        @if (old('user_id') == $user->user_id)
                                            <option value="{{ $user->user_id }}" selected> {{ $user->judul }} </option>
                                        @else
                                            <option value="{{ $user->user_id }}">{{ $user->judul }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div> --}}

                            <div class="form-group">
                                <label for="exampleInputEmail">Email</label>
                                <input type="text" class="form-control" id="exampleInputEmail" name="email" placeholder="Masukkan Email" />
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword" name="password" placeholder="Masukkan Password" />
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Role</label>
                                <select class="form-control" name="role" id="exampleSelectGender">
                                    <option selected hidden>~ Pilih role ~</option>
                                    <option>Admin</option>
                                    <option>Guru</option>
                                    <option>Siswa</option>
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
