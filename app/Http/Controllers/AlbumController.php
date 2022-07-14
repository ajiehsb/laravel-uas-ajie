<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Album::all();
        return view('album.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'alb_id_artist' => 'required',
                'alb_name' => 'required',
            ],
            [
                'alb_id_artist.required' => 'Id Artis Album wajib diisi',
                'alb_name.required' => 'Nama Album Wajib diisi',                
            ]
        );

       album::create([
            'alb_id_artist' => $request->alb_id_artist,
            'alb_name' => $request->alb_name,
        ]);

        return redirect('album');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = album::findOrFail($id);
        return view('album.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'alb_id_artist' => 'required',
                'alb_name' => 'required',
            ],
            [
                'alb_id_artist.required' => 'Id Artis Album wajib diisi',
                'alb_name.required' => 'Nama Album Wajib diisi',                
            ]
        );

        $row = album::findOrFail($id);
        $row->update([
            'alb_id_artist' => $request->alb_id_artist,
            'alb_name' => $request->alb_name,

        ]);

        return redirect('album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = album::findOrFail($id);
        $row->delete();

        return redirect('album');
    }
}
