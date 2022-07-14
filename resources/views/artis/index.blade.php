@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Artis
        <a class="btn btn-primary btn-sm float-end" href="{{ url('artis/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->art_id }}</td>
        <td>{{ $row->art_name }}</td>
        <td><a href="{{ url('artis/' . $row->art_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('artis/' . $row->art_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection