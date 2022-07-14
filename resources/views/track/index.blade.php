@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Track
        <a class="btn btn-primary btn-sm float-end" href="{{ url('track/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>ID ALBUM</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->trc_id }}</td>
        <td>{{ $row->trc_name }}</td>
        <td>{{ $row->trc_id_album }}</td>
        <td><a href="{{ url('track/' . $row->trc_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('track/' . $row->trc_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection