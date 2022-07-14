@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Artis</h3>
        <form action="{{ url('/artis/' . $row->art_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Nama Artis</label>
                <input type="text" class="form-control" name="art_name" value="{{ $row->art_name }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
