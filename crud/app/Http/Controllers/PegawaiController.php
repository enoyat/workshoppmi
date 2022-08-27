<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapegawais=Pegawai::get();
        return view('pegawai.index')->with('datapegawais',$datapegawais);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.create');
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
        $request->validate([
            'nama'=>'required',
            'nip'=>'required|max:5|unique:pegawai,nip',
            'alamat'=>'required',
        ]);
       // Pegawai::create($request->all());
        $datapegawai=new Pegawai();
        $datapegawai->nama=$request->nama;
        $datapegawai->nip=$request->nip;
        $datapegawai->alamat=$request->alamat;
        $datapegawai->save();
        // Pegawai::create([
        //     'nama'=>$request->nama,
        //     'nip'=>$request->nip,
        //     'alamat'=>$request->alamat,
        // ]);
        return redirect('/pegawai')->with('status','Data Berhasil Ditambahkan');
       // return redirect()->Route('pegawai.index');
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
        $datapegawai=Pegawai::find($id);
        return view('pegawai.edit')->with('datapegawai',$datapegawai);

        //
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
        $request->validate([
            'nama'=>'required',
            'nip'=>'required|max:5',
            'alamat'=>'required',
        ]);
        $datapegawai=Pegawai::find($id);
        $datapegawai->nama=$request->nama;
        $datapegawai->nip=$request->nip;
        $datapegawai->alamat=$request->alamat;
        $datapegawai->save();
        return redirect('/pegawai')->with('status','Data Berhasil Diubah');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datapegawai=Pegawai::find($id);
        $datapegawai->delete();
        return redirect('/pegawai')->with('status','Data Berhasil Dihapus');
        //
    }
}
