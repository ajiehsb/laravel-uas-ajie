<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Played;

class PlayedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Played::all();
        return view('played.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('played.create');
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
                'ply_id_track' => 'required',
                'ply_played' => 'required',
            ],
            [
                'ply_id_track.required' => 'Id Track Played wajib diisi',
                'ply_played.required' => 'Waktu Played Wajib diisi',                
            ]
        );

       played::create([
            'ply_id_track' => $request->ply_id_track,
            'ply_played' => $request->ply_played,
        ]);

        return redirect('played');
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
        $row = golongan::findOrFail($id);
        return view('golongan.edit', compact('row'));
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
                'ply_id_track' => 'required',
                'ply_played' => 'required',
            ],
            [
                'ply_id_track.required' => 'Id Track Played wajib diisi',
                'ply_played.required' => 'Waktu Played Wajib diisi',                
            ]
        );

        $row = played::findOrFail($id);
        $row->update([
            'ply_id_track' => $request->ply_id_track,
            'ply_played' => $request->ply_played,

        ]);

        return redirect('played');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = played::findOrFail($id);
        $row->delete();

        return redirect('played');
    }
}
