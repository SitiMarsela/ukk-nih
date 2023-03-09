@extends('layout1')

@section('isi1')

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

                            <td>
                                <a href="">Tanggapi</a>
                            </td>

                                {{-- <td class="d-flex">
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

                                </td> --}}
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