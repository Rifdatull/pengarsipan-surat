<?php

namespace App\Http\Controllers;

use App\suratmasuk;
use Illuminate\Http\Request;

class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $suratmasuk = suratmasuk::all();
        return view('suratmasuk.index',compact('suratmasuk'));
    }

    public function cetakMasuk()
    {
        $cetakmasuk = suratmasuk::all();
        return view('suratmasuk.cetakmasuk',compact('cetakmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suratmasuk = \App\suratmasuk::all();
        return view ('suratmasuk.create',compact('suratmasuk'));
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
            'pengirim' => 'required',
    	]);
        suratmasuk::create([
    		'nama_surat' => $request->nama_surat,
    		'perihal' => $request->perihal,
            'ditunjukkan' => $request->ditunjukkan,
            'tanggal_surat' => $request->tanggal_surat,
            'pengirim' => $request->pengirim,  
    	]);
 
    	return redirect('/suratmasuk');
    }
        

    /**
     * Display the specified resource.
     *
     * @param  \App\suratmasuk  $suratmasuk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\suratmasuk  $suratmasuk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suratmasuk = suratmasuk::find($id);
        return view('suratmasuk.edit', ['suratmasuk' => $suratmasuk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\suratmasuk  $suratmasuk
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nama_surat' => 'required',
            'perihal' => 'required',
            'ditunjukkan' => 'required',
            'tanggal_surat' => 'required',
            'pengirim' => 'required',
         ]);
      
         $suratmasuk = suratmasuk::find($id);
         $suratmasuk->nama_surat = $request->nama_surat;
         $suratmasuk->perihal = $request->perihal;
         $suratmasuk->ditunjukkan= $request->ditunjukkan;
         $suratmasuk->tanggal_surat = $request->tanggal_surat;
         $suratmasuk->pengirim = $request->pengirim;
         $suratmasuk->save();
         return redirect('/suratmasuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\suratmasuk  $suratmasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratmasuk = suratmasuk::find($id);
        $suratmasuk->delete();
        return redirect('/suratmasuk');
    }
}

