<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Track::all();
        return view('track.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('track.create');
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
                'trc_name' => 'required',
                'trc_id_album' => 'required',
            ],
            [
                'trc_name.required' => 'Nama Track Wajib diisi',
                'trc_id_album.required' => 'Id Album Track wajib diisi',                
            ]
        );

       track::create([
            'trc_name' => $request->trc_name,
            'trc_id_album.required' => $request->trc_id_album,
        ]);

        return redirect('track');
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
        $row = track::findOrFail($id);
        return view('track.edit', compact('row'));
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
                'trc_name' => 'required',
                'trc_id_album' => 'required',
            ],
            [
                'trc_name.required' => 'Nama Track Wajib diisi',
                'trc_id_album.required' => 'Id Album Track wajib diisi',                
            ]
        );

        $row = track::findOrFail($id);
        $row->update([
            'trc_name' => $request->trc_name,
            'trc_id_album.required' => $request->trc_id_album,

        ]);

        return redirect('track');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = track::findOrFail($id);
        $row->delete();

        return redirect('track');
    }
}
