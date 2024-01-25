<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showHistoryMasuk(){
        $histMasuk = DB::select(DB::raw("select * from histMasuk"));
        return view('admin.historyMasuk', compact('histMasuk'));
    }

    public function showHistoryKeluar(){
        $histKeluar = DB::select(DB::raw("select * from histKeluar"));
        return view('admin.historyKeluar', compact('histKeluar'));
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
    public function store(Request $request)
    {
        //
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
    public function edit($keluar_id)
    {
        $histKeluar = DB::table('histKeluar')->where('keluar_id', $keluar_id)->first();
        return view('admin.historyKeluar_edit', compact('histKeluar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $keluar_id)
    {
        $this->validate($request, [
            'keluar_keterangan' => 'required'
        ]);
    
        $updateData = [
            'keluar_keterangan' => $request->keluar_keterangan,
        ];
    
        DB::table('histKeluar')->where('keluar_id', $keluar_id)->update($updateData);
    
        return redirect()->route('admin.historyKeluar')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
