@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Tambah Data Track</h3>
        <form action="{{ url('/track') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama Track</label>
                <input type="text" class="form-control" name="trc_name">
            </div>
            <div class="mb-3">
                <label>Id Album</label>
                <input type="text" class="form-control" name="trc_id_album">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
