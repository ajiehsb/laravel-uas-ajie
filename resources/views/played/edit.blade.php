@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Played</h3>
        <form action="{{ url('/played/' . $row->ply_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Id Track</label>
                <input type="text" class="form-control" name="ply_id_track" value="{{ $row->ply_id_track }}"></>
            </div>
            <div class="mb-3">
                <label>Play</label>
                <input type="text" class="form-control" name="ply_played" value="{{ $row->ply_played }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
