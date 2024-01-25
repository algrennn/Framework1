<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GuruController extends Controller
{
    public function showGuru(){
        $guru = DB::select(DB::raw("select * from guru"));
        return view('admin.guru', compact('guru'));
    }

    public function edit($guru_id)
    {
        $guru = DB::table('guru')->where('guru_id', $guru_id)->first();
        return view('admin.guru_edit', compact('guru'));
    }
    

    public function update(Request $request, $guru_id)
{
    $this->validate($request, [
        'guru_nama' => 'required',
        'guru_username' => 'required',
        'guru_status' => 'required',
        'guru_kontak' => 'required',
    ]);

    $updateData = [
        'guru_nama' => $request->guru_nama,
        'guru_username' => $request->guru_username,
        'guru_status' => $request->guru_status,
        'guru_kontak' => $request->guru_kontak,
    ];

    DB::table('guru')->where('guru_id', $guru_id)->update($updateData);

    return redirect()->route('admin.guru')->with(['success' => 'Data Berhasil Diubah!']);
}

    public function guru_aksi(Request $request)
    {
        $this->validate($request, [
            'guru_nama' => 'required',
            'guru_username' => 'required',
            'guru_status' => 'required',
            'guru_kontak' => 'required',
        ]);
    
        DB::table('guru')->insert([
            'guru_nama' => $request->guru_nama,
            'guru_username' => $request->guru_username,
            'guru_status' => $request->guru_status,
            'guru_kontak' => $request->guru_kontak,
        ]);
    
        return redirect()->route('admin.guru')->with(['success' => 'Data Guru Berhasil Disimpan!']);
    }

    public function destroy($guru_id)
    {
        DB::table('guru')->where('guru_id', $guru_id)->delete();

        return redirect()->route('admin.guru')->with(['success' => 'Data Berhasil Dihapus!']);
    }


}


