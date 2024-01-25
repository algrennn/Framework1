<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showKategori(){
        $kategori = DB::select(DB::raw("select * from kategori"));
        return view('admin.kategori', compact('kategori'));
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
    public function kategori_aksi(Request $request)
    {
        $this->validate($request, [
            'kategori_nama' => 'required',
            'kategori_keterangan' => 'required',
            'kategori_referensi' => 'required'
        ]);
    
        // No need to validate or upload image for class
    
        DB::table('kategori')->insert([
            'kategori_nama' => $request->kategori_nama,
            'kategori_keterangan' => $request->kategori_keterangan,
            'kategori_referensi' => $request->kategori_referensi
        ]);
    
        return redirect()->route('admin.kategori')->with(['success' => 'Data Kategori Berhasil Disimpan!']);
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
    public function edit($kategori_id)
    {
        $kategori = DB::table('kategori')->where('kategori_id', $kategori_id)->first();
        return view('admin.kategori_edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kategori_id)
{
    $this->validate($request, [
        'kategori_nama' => 'required',
        'kategori_keterangan' => 'required',
        'kategori_referensi' => 'required',
    ]);

    $updateData = [
        'kategori_nama' => $request->kategori_nama,
        'kategori_keterangan' => $request->kategori_keterangan,
        'kategori_referensi' => $request->kategori_referensi
    ];

    DB::table('kategori')->where('kategori_id', $kategori_id)->update($updateData);

    return redirect()->route('admin.kategori')->with(['success' => 'Data Berhasil Diubah!']);
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kategori_id)
    {
        DB::table('kategori')->where('kategori_id', $kategori_id)->delete();

        return redirect()->route('admin.kategori')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
