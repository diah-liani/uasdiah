@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA PASIEN</h3>
        <form action="{{ url('/Pasien/' .$row->pel_id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">KODE</label>
                <input type="text" name="pasien_no" class="form-control" value="{{$row->pasien_no}}">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="pasien_nama" class="form-control" value="{{$row->pasien_nama}}">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="pasien_alamat" class="form-control" value="{{$row->pasien_alamat}}">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="pasien_hp" class="form-control" value="{{$row->pasien_hp}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-secondary" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection