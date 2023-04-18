<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class pmasuk1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_parkir = \App\Models\parkir::all();
        return view('pmasuk1.index', ['data_parkir' => $data_parkir]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        // $database = DB::table('parkir');
        // $platNomor = $request->platNomor;
        // $ruangParkir = $request->ruangParkir;
        // $sudah_masuk = $request->sudah_masuk;
        // $pernah_masuk = $request->pernah_masuk;
        // // $tarif = $request->tarif;

        // if ($database->where('platNomor', $platNomor)->exists()) {
        //     $database->where('platNomor', $platNomor)->update([
        //         'platNomor' => $platNomor,
        //         'ruangParkir' => $ruangParkir,
        //         'sudah_masuk' => $sudah_masuk == 1,
        //         'pernah_masuk' => $pernah_masuk+=1,
        //         // 'tarif' => $tarif
        //     ]);

        //     return redirect()->route('pmasuk1')->with('success', 'Plat Nomor berhasil ditambahkan');
        // } else {
        //     $database->insert(['platNomor'=>$request->platNomor, 'sudah_masuk'=>$request->sudah_masuk]);
        // } 
        
    $database = DB::table('parkir');
    $platNomor = $request->platNomor;
    $ruangParkir = $request->ruangParkir;
    $sudah_masuk = $request->sudah_masuk;

    $data = $database->where('platNomor', $platNomor)->first();
    if ($data) {
        $pernah_masuk = $data->pernah_masuk + 1;
        $database->where('platNomor', $platNomor)->update([
            'ruangParkir' => $ruangParkir,
            'sudah_masuk' => $sudah_masuk == 1,
            'pernah_masuk' => $pernah_masuk,
        ]);

        return redirect()->route('pmasuk1')->with('success', 'Plat Nomor berhasil ditambahkan');
    } else {
        $database->insert([
            'platNomor' => $request->platNomor,
            'sudah_masuk' => $request->sudah_masuk,
            'pernah_masuk' => 1,
        ]);

        return redirect()->route('pmasuk1')->with('success', 'Plat Nomor berhasil ditambahkan');
    }
        
    }
// $user = DB::table('parkir')->get();
        // DB::table('parkir')->insert(['platNomor'=>$request->platNomor, 'sudah_masuk'=>$request->sudah_masuk]);
        // return redirect('/pmasuk1');
        
        // \App\Models\parkir::create($request->all());
        // return redirect('/pmasuk1')->with('sukses','Data berhasil diinput');
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
    public function edit($id)
    {
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
        //
    }
}
