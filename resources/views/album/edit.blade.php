@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Album</h3>
        <form action="{{ url('/album/' . $row->alb_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Id Artis</label>
                <input type="text" class="form-control" name="alb_id_artist" value="{{ $row->alb_id_artist }}"></>
            </div>
            <div class="mb-3">
                <label>Nama Album</label>
                <input type="text" class="form-control" name="alb_name" value="{{ $row->alb_name }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
