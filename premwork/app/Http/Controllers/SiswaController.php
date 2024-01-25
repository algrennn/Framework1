<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSiswa(){
        $siswa = DB::select(DB::raw("SELECT siswa.*, kategori.kategori_nama
        FROM siswa
        LEFT JOIN kategori ON siswa.siswa_kategori = kategori.kategori_id;
        "));
        return view('admin.siswa', compact('siswa'));
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
    public function siswa_aksi(Request $request)
    {
        $this->validate($request, [
            'siswa_nama' => 'required',
            'siswa_kelas' => 'required',
            'siswa_status' => 'required',
            'kategori' => 'required',
        ]);
    
        DB::table('siswa')->insert([
            'siswa_nama' => $request->siswa_nama,
            'siswa_kelas' => $request->siswa_kelas,
            'siswa_status' => $request->siswa_status,
            'siswa_kategori' => $request->kategori, // Ganti 'siswa_kategori' menjadi 'kategori'
        ]);
    
        return redirect()->route('admin.siswa')->with(['success' => 'Data Siswa Berhasil Disimpan!']);
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
    public function edit($siswa_id)
    {
        $siswa = DB::table('siswa')->where('siswa_id', $siswa_id)->first();
        return view('admin.siswa_edit', compact('siswa'));
    }

    public function kategoriSiswa()
    {
        $kategoriSiswa = DB::table('kategori')->get();

        return view('admin.siswa_tambah', compact('kategoriSiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $siswa_id)
{
    $this->validate($request, [
        'siswa_nama' => 'required',
        'siswa_kelas' => 'required',
        'siswa_status' => 'required',
        'siswa_kategori' => 'required',
    ]);

    $updateData = [
        'siswa_nama' => $request->siswa_nama,
        'siswa_kelas' => $request->siswa_kelas,
        'siswa_status' => $request->siswa_status,
        'siswa_kategori' => $request->siswa_kategori,
    ];

    DB::table('siswa')->where('siswa_id', $siswa_id)->update($updateData);

    return redirect()->route('admin.siswa')->with(['success' => 'Data Berhasil Diubah!']);
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($siswa_id)
    {
        DB::table('siswa')->where('siswa_id', $siswa_id)->delete();

        return redirect()->route('admin.siswa')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
