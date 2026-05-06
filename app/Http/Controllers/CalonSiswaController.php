<?php

namespace App\Http\Controllers;

use App\Models\CalonSiswa;
use Illuminate\Http\Request;

class CalonSiswaController extends Controller
{
    public function create()
    {
        return view('form-daftar');
    }

    public function listSiswa()
    {
        $dataSiswa = CalonSiswa::all();
        return view('list-siswa', ['dataSiswa' => $dataSiswa]);
    }

    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $agama = $request->input('agama');
        $sekolah_asal = $request->input('sekolah_asal');

        $data = [
            'nama' => $nama,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
            'sekolah_asal' => $sekolah_asal
        ];
        
        CalonSiswa::create($data);

        return redirect()->route('list-siswa');
    }  

    public function show($id)
    {
        $siswa = CalonSiswa::where('id', $id)->first();
        return view('detail-siswa', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $agama = $request->input('agama');
        $sekolah_asal = $request->input('sekolah_asal');

        CalonSiswa::where('id', $id)->update([
            'nama' => $nama,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
            'sekolah_asal' => $sekolah_asal
        ]);

        return redirect()->route('list-siswa');
    }

    public function delete($id)
    {
        CalonSiswa::where('id', $id)->delete();
        return redirect()->route('list-siswa');
    }
}
