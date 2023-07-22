@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DATA PASIEN</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-secondary btn-sm float-end" href="{{ url('pasien/create')}}">Tambah Data</a>
        <table class="table table-striped">
            <tr>
                <td>NO</td>
                <td>KODE</td>
                <td>NAMA</td>
                <td>ALAMAT</td>
                <td>NOMOR HP</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->pasien_id}}</td>
                <td>{{ $row->pasien_no}}</td>
                <td>{{ $row->pasien_nama}}</td>
                <td>{{ $row->pasien_alamat}}</td>
                <td>{{ $row->pasien_hp}}</td>
                <td><a class="btn btn-info btn-sm float" href="{{url('pasien/' .$row->pasien_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('pasien/' .$row->pasien_id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection