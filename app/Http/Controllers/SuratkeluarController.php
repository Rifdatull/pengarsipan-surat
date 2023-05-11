<?php

namespace App\Http\Controllers;

use App\suratkeluar;
use Illuminate\Http\Request;

class SuratkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suratkeluar = suratkeluar::all();
        return view('suratkeluar.index',compact('suratkeluar'));
    }

    public function cetakKeluar()
    {
        $cetakkeluar = suratkeluar::all();
        return view('suratkeluar.cetakkeluar',compact('cetakkeluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suratkeluar = \App\suratkeluar::all();
        return view ('suratkeluar.create',compact('suratkeluar'));
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
    		'nama_surat' => 'required',
    		'perihal' => 'required',
            'ditunjukkan' => 'required',
            'tanggal_surat' => 'required',
            'penerima' => 'required',
    	]);
        suratkeluar::create([
    		'nama_surat' => $request->nama_surat,
    		'perihal' => $request->perihal,
            'ditunjukkan' => $request->ditunjukkan,
            'tanggal_surat' => $request->tanggal_surat,
            'penerima' => $request->penerima,  
    	]);
       
 
    	return redirect('/suratkeluar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\suratkeluar  $suratkeluar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\suratkeluar  $suratkeluar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suratkeluar = suratkeluar::find($id);
        return view('suratkeluar.edit', ['suratkeluar' => $suratkeluar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\suratkeluar  $suratkeluar
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama_surat' => 'required',
            'perihal' => 'required',
            'ditunjukkan' => 'required',
            'tanggal_surat' => 'required',
            'penerima' => 'required',
         ]);
      
         $suratkeluar = suratkeluar::find($id);
         $suratkeluar->nama_surat = $request->nama_surat;
         $suratkeluar->perihal = $request->perihal;
         $suratkeluar->ditunjukkan= $request->ditunjukkan;
         $suratkeluar->tanggal_surat = $request->tanggal_surat;
         $suratkeluar->penerima = $request->penerima;
         $suratkeluar->save();
         return redirect('/suratkeluar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\suratkeluar  $suratkeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratkeluar = suratkeluar::find($id);
        $suratkeluar->delete();
        return redirect('/suratkeluar');
    }
}
