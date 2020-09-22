<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Divisi;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Divisi::all();
        return view('divisi.index-div',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('divisi.create-div');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama_divisi' => 'required|min:2',
        ]);

        $divisi = new Divisi;
        $divisi->nama_divisi = $validasi['nama_divisi'];
        $divisi->save();

        return redirect()->route('divisi.index');
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
    public function edit(Divisi $divisi)
    {
        $divisi = Divisi::find($divisi->id);
        return view('divisi.edit-div', compact('divisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Divisi $divisi)
    {
        $validasi = $request->validate([
            'nama_divisi' => 'required',
        ]);

        $divisi = Divisi::find($validasi);
        $divisi->nama_divisi = $request->nama_divisi;
        $divisi->save('nama_divisi');

        return redirect()->route('divisi.index-dev');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Divisi $divisi)
    {
        $divisi->delete();
        return redirect()->route('divisi.index');
    }
}
