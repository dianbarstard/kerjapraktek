<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('admin.mahasiswa.index',['mahasiswa'=>$mahasiswa]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mahasiswa.create');
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
            'nama'         => 'required',
            'tanggal'    => 'required',
            'materi'     => 'required',
            'lokasi'     => 'required'
        ]);

        Mahasiswa::create([
            'no'         => $request->no,
            'nama'         => $request->nama,
            'tanggal'    => $request->tanggal,
            'materi'     => $request->materi,
            'lokasi'     => $request->lokasi
        ]);
        return redirect('/mahasiswa');
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
        $mahasiswa = Mahasiswa::find($id);
        return view('admin.mahasiswa.edit',['mahasiswa' => $mahasiswa]);
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
            'nama'        => 'required',
            'tanggal'   => 'required',
            'materi'    => 'required',
            'lokasi'    => 'required'
        ]);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->no      = $request->no;
        $mahasiswa->nama      = $request->nama;
        $mahasiswa->tanggal = $request->tanggal;
        $mahasiswa->materi  = $request->materi;
        $mahasiswa->lokasi  = $request->lokasi;

        $mahasiswa->save();

        //$mahasiswa = Mahasiswa::find($id);
        //$mahasiswa->update($request->all());

        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->back();//
    }

    public function search(Request $request) {
        if($request->has('search')) {
            $mahasiswa = Mahasiswa::where('tanggal','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $mahasiswa = Mahasiswa::all();
        }

        return view('admin.mahasiswa.index',['mahasiswa' => $mahasiswa]);
        
    }

    public function downloadpdf(){
        $mahasiswa = Mahasiswa::all();
        $pdf = PDF::loadview('admin.mahasiswa.laporan',['mahasiswa' => $mahasiswa])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_portal_berita_Tahun2021.pdf');
    }

}
