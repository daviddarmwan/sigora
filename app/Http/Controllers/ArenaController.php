<?php

namespace App\Http\Controllers;

use App\Models\Gor;
use App\Models\Arena;
use Illuminate\Http\Request;

class ArenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kode_gor = '') { // = '' optional
        if($kode_gor){
            $gor = Gor::where('id', $kode_gor)->first();
            if($gor){
                $arena = Arena::where('kode_gor', $kode_gor)->get();
                return view('arena.index')->with('nama_gor', $gor->nama_gor)->with('arena', $arena);
            }
            else{
                return abort(403, 'GOR Tidak Ada');
                }
            }
        else{
            $arena = Arena::all();
            return view('arena.index')->with('nama_gor', 'Semua Arena')->with('arena', $arena);
        }
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gor = Gor::select('id', 'nama_gor')->get();
        return view('arena.create', compact('gor'));
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
            'nama_arena' => 'required',
            'kode_gor' => 'required',
        ]);
        $array = $request->only([
            'nama_arena', 'kode_gor'
        ]);
        $arena = Arena::create($array);
        return redirect()->route('arena.index')
            ->with('success_message', 'Berhasil menambah Arena Baru');
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
        $arena = Arena::find($id);
        if (!$arena) return redirect()->route('arena.index')
            ->with('error_message', 'Arena dengan id '.$id.' tidak ditemukan');
        return view('arena.edit', [
            'arena' => $arena
        ]);
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
        $arena = Arena::find($id);
        $arena->nama_arena = $request->nama_arena;
        $arena->kode_gor = $request->kode_gor;
        $arena->save();
    
    return redirect()->route('arena.index')
        ->with('success_message', 'Berhasil mengubah Arena');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arena = Arena::find($id);
        if ($arena) $arena->delete();
        return redirect()->route('arena.index')
            ->with('success_message', 'Berhasil menghapus Arena');
    }
}
