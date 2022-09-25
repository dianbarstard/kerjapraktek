<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use PDF;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('admin.karyawan.index',['karyawan'=>$karyawan]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'no'         => 'required',
            'nama'       => 'required',
            'tanggal'    => 'required',
            'materi'     => 'required',
            'lokasi'     => 'required'
        ]);

        Karyawan::create([
            'no'         => $request->no,
            'nama'       => $request->nama,
            'tanggal'    => $request->tanggal,
            'materi'     => $request->materi,
            'lokasi'     => $request->lokasi
        ]);
        return redirect('/karyawan');
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
        $karyawan = Karyawan::find($id);
        return view('admin.karyawan.edit',['karyawan' => $karyawan]);
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
        $this->validate($request,[
            'no'        => 'required',
            'nama'      => 'required',
            'tanggal'   => 'required',
            'materi'    => 'required',
            'lokasi'    => 'required'
        ]);
        $karyawan = Karyawan::find($id);
        $karyawan->no      = $request->no;
        $karyawan->nama    = $request->nama;
        $karyawan->tanggal = $request->tanggal;
        $karyawan->materi  = $request->materi;
        $karyawan->lokasi  = $request->lokasi;

        $karyawan->save();

        //$karyawan = Karyawan::find($id);
        //$karyawan->update($request->all());

        return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();

        return redirect()->back();//
    }

    public function search(Request $request) {
        if($request->has('search')) {
            $karyawan = Karyawan::where('tanggal','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $karyawan = Karyawan::all();
        }

        return view('admin.karyawan.index',['karyawan' => $karyawan]);
        
    }

    public function unduhpdf(){
        $karyawan = Karyawan::all();
        $pdf = PDF::loadview('admin.karyawan.laporan',['karyawan' => $karyawan])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_portal_Berita_Tahun2020.pdf');
    }

}
