@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Tambah Data Played</h3>
        <form action="{{ url('/played') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Id Track</label>
                <input type="text" class="form-control" name="ply_id_track">
            </div>
            <div class="mb-3">
                <label>Play</label>
                <input type="text" class="form-control" name="ply_played">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
