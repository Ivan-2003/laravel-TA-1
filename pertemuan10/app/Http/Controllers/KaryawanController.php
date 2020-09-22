<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\NIK;
use App\Divisi;
use App\Jabatan;
use App\Status;
use App\Hobi;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = karyawan::all();
        return view('layouts.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisi = Divisi::all();
        $jabatan = Jabatan::all();
        $status = Status::all();
        $daftar_hobi = Hobi::all();
        return view('layouts.create', compact('divisi', 'jabatan', 'status', 'daftar_hobi'));
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
            'nama_karyawan' => 'required|min:3',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'divisi_id' => 'required',
            'jabatan_id' => 'required',
            'status_id' => 'required',
        ]);

        $karyawan = Karyawan::create($validasi);
        $nik =new NIK;
        $nik->nik = $request->input('nik');
        $karyawan->nik()->save($nik);
        // $karyawan->save();
        $karyawan->hobi()->attach($request->hobi);

        return redirect()->route('karyawan.index');
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
    public function edit(Karyawan $karyawan)
    {
        // $divisi = Divisi::all();
        // $jabatan = Jabatan::all();
        // $status = Status::all();
        // $karyawan->nik = $karyawan->nik->nik;
        $karyawan->find($karyawan->id)->all();
        $divisi = Divisi::all();
        $jabatan = Jabatan::all();
        $status = Status::all();
        $daftar_hobi = Hobi::all();
        $karyawan->nik = $karyawan->nik->nik;

        return view('layouts.edit', compact('karyawan','divisi','jabatan','status', 'daftar_hobi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $validasi = $request->validate([
            'nama_karyawan' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'divisi_id' => 'required',
            'jabatan_id' => 'required',
            'status_id' => 'required',
        ]);

        $karyawan->update($validasi);
        $nik = $karyawan->nik;
        $karyawan->nik = $request->input('nik');
        $karyawan->nik()->save($nik);

        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('karyawan.index');
    }
}
