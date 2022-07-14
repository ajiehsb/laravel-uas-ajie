<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artis;

class ArtisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Artis::all();
        return view('artis.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artis.create');
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
                'art_name' => 'bail|required|unique:tb_artist',
            ],
            [
                'art_name.required' => 'Artis wajib diisi',
                'art_name.unique' => 'Nama Artis sudah ada',
            ]
        );

        artis::create([
            'art_name' => $request->art_name,
        ]);

        return redirect('artis');
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
        $row = artis::findOrFail($id);
        return view('artis.edit', compact('row'));
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
                'art_name' => 'bail|required',
            ],
            [
                'art_name.required' => 'Nama Artis wajib diisi'
            ]
        );

        $row = artis::findOrFail($id);
        $row->update([
             'art_name' => $request->art_name,

        ]);

        return redirect('artis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = artis::findOrFail($id);
        $row->delete();

        return redirect('artis');
    }
}
