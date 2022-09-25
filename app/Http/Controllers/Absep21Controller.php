<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absep21;
use PDF;

class Absep21Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absep21 = Absep21::all();
        return view('admin.absep21.index',['absep21'=>$absep21]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.absep21.create');
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

        Absep21::create([
            'no'         => $request->no,
            'nama'       => $request->nama,
            'tanggal'    => $request->tanggal,
            'materi'     => $request->materi,
            'lokasi'     => $request->lokasi
        ]);
        return redirect('/absep21');
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
        $absep21 = Absep21::find($id);
        return view('admin.absep21.edit',['absep21' => $absep21]);
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
        $absep21 = Absep21::find($id);
        $absep21->no      = $request->no;
        $absep21->nama    = $request->nama;
        $absep21->tanggal = $request->tanggal;
        $absep21->materi  = $request->materi;
        $absep21->lokasi  = $request->lokasi;

        $absep21->save();

        //$absep21 = Absep21::find($id);
        //$absep21->update($request->all());

        return redirect('/absep21');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absep21 = Absep21::find($id);
        $absep21->delete();

        return redirect()->back();//
    }

    public function absep21pdf(){
        $absep21 = Absep21::all();
        $pdf = PDF::loadview('admin.absep21.laporan',['absep21' => $absep21])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan_Data_Abby_September2021.pdf');
    }

}
