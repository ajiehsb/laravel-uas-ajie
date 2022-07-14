@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Album
        <a class="btn btn-primary btn-sm float-end" href="{{ url('album/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>ID ARTIS</th>
            <th>NAMA</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->alb_id }}</td>
        <td>{{ $row->alb_id_artist }}</td>
        <td>{{ $row->alb_name }}</td>
        <td><a href="{{ url('album/' . $row->alb_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('album/' . $row->alb_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection