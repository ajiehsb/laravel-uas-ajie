@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Track</h3>
        <form action="{{ url('/track/' . $row->trc_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Nama Track</label>
                <input type="text" class="form-control" name="trc_name" value="{{ $row->trc_name }}"></>
            </div>
            <div class="mb-3">
                <label>Id Album</label>
                <input type="text" class="form-control" name="trc_id_album" value="{{ $row->trc_id_album }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
