<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Kartu;


class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //eloquent 
        $pelanggan = Pelanggan::all();
        return view('admin.pelanggan.index',['pelanggan' => $pelanggan]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $kartu = Kartu::all();
        $gender = ['L','P'];
        return view ('admin.pelanggan.create', compact('kartu', 'gender'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //tambah data eloquent
        $pelanggan = new Pelanggan;
        $pelanggan->kode = $request->kode;
        $pelanggan->nama = $request->nama;
        $pelanggan->jk = $request->jk;
        $pelanggan->tmp_lahir = $request->tmp_lahir;
        $pelanggan->tgl_lahir = $request->tgl_lahir;
        $pelanggan->email = $request->email;
        $pelanggan->kartu_id = $request->kartu_id;
        $pelanggan->save();
        return redirect('admin/pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //show eloquent
        $pelanggan = Pelanggan::find($id);
        return view ('admin.pelanggan.show', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //edit eloquent
        $pelanggan = Pelanggan::find($id);
        $kartu = Kartu::all();
        $gender = ['L','P'];
        return view ('admin.pelanggan.edit', compact('pelanggan', 'kartu','gender'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete eloquent
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect('admin/pelanggan');

    }
}
