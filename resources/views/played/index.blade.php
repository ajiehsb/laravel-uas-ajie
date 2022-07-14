@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Played
        <a class="btn btn-primary btn-sm float-end" href="{{ url('played/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>ID TRACK</th>
            <th>PLAY</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->ply_id }}</td>
        <td>{{ $row->ply_id_track }}</td>
        <td>{{ $row->ply_played }}</td>
        <td><a href="{{ url('played/' . $row->ply_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('played/' . $row->ply_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection