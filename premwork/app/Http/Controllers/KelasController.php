<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showKelas(){
        $kelas = DB::select(DB::raw("select * from kelas"));
        return view('admin.kelas', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function kelas_aksi(Request $request)
    {
        $this->validate($request, [
            'kelas_nama' => 'required',
            'kelas_anggota' => 'required|integer',
            'kelas_tahunAjaran' => 'required',
        ]);
    
        // No need to validate or upload image for class
    
        DB::table('kelas')->insert([
            'kelas_nama' => $request->kelas_nama,
            'kelas_anggota' => $request->kelas_anggota,
            'kelas_tahunAjaran' => $request->kelas_tahunAjaran,
        ]);
    
        return redirect()->route('admin.kelas')->with(['success' => 'Data Kelas Berhasil Disimpan!']);
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
    public function edit($kelas_id)
    {
        $kelas = DB::table('kelas')->where('kelas_id', $kelas_id)->first();
        return view('admin.kelas_edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kelas_id)
{
    $this->validate($request, [
        'kelas_nama' => 'required',
        'kelas_anggota' => 'required',
        'kelas_tahunAjaran' => 'required',
    ]);

    $updateData = [
        'kelas_nama' => $request->kelas_nama,
        'kelas_anggota' => $request->kelas_anggota,
        'kelas_tahunAjaran' => $request->kelas_tahunAjaran,
    ];

    DB::table('kelas')->where('kelas_id', $kelas_id)->update($updateData);

    return redirect()->route('admin.kelas')->with(['success' => 'Data Berhasil Diubah!']);
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kelas_id)
    {
        DB::table('kelas')->where('kelas_id', $kelas_id)->delete();

        return redirect()->route('admin.kelas')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
