@extends('layout')

@section('isi')

<nav class="navbar navbar-expand-lg navbar-dark fixed-top"
    style="background-image: linear-gradient(to right, #000046, #1CB5E0)">
    <div class="container">
        <img src="img/about.png" alt="">
        <a class="navbar-brand fw-bold" href="#">Singadu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fw-bold" style="padding-right: 70px">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- 
<div class="container text-center" style="Padding-top: 8%;">
    <button type="button" class="btn btn-success">Buat Pengaduan</button>
</div> --}}


{{-- <h2>User Page.. halo {{Auth::guard('masyarakat')->user()->name}}</h2> --}}


<div class="container mt-5" style="Padding-top: 3%;">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('simpan-pengaduan')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1 class="text-center">Form Pengaduan</h1>

                        <div class="mb-3">
                            <label for="tgl_pengaduan" class="form-label">Tanggal Pengaduan</label>
                            <input class="form-control" type="date" id="tgl_pengaduan" name="tgl_pengaduan">
                            @error('tgl_pengaduan')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input class="form-control" type="text" id="nik" name="nik">
                            @error('nik')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="isi_laporan" class="form-label">Isi Laporan</label>
                            <textarea class="form-control" name="isi_laporan" id="isi_laporan" cols="30"
                                rows="10"></textarea>
                            @error('isi_laporan')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto</label>
                            <input class="form-control" name="foto" type="file" id="foto">
                            @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card" style="margin-top: 30px">
                <div class="card-body">
                    <h1 class="text-center pb-5">DETAIL PENGADUAN</h1>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                    @endif

                    {{-- TABLE --}}

                    <table class="table">
                        <thead style="align-content: center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal Pengaduan</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Isi Laporan</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Status</th>
                                <th scope="col">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataPengaduan as $item)

                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{ $item->tgl_pengaduan }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->isi_laporan }}</td>
                                <td>
                                    <img src="{{asset('foto/'.$item->foto)}}" alt="" style="width: 50px; height: 50px">
                                </td>
                                <td>{{ $item->Status }}</td>

                                <td class="d-flex">
                                    <div class="edit pe-1">
                                        <a href="{{ url('edit-pengaduan',$item->id)}}" class="btn btn-warning">Edit</a>
                                        <form action="{{ url('delete-pengaduan', $item->id)}}" method="POST">
                                            @csrf
                                    </div>
                                    <div class="delete">
                                        @method('delete')
                                        <button class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



























@endsection