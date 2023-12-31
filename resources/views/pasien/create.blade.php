@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA PASIEN</h3>
        <form action="{{ url('/pasien')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="pasien_no" class="form-control" placeholder="Kode">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="pasien_nama" class="form-control" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="pasien_alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="pasien_hp" class="form-control" placeholder="Nomor Hp">
            </div>
            <div class="mb-3">
                <input class="btn btn-secondary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection