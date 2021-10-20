<?php

namespace App\Http\Controllers;

use App\Models\Krama;
use Illuminate\Http\Request;

class KramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 10;
        $krama = Krama::first()->paginate($pagination);

        return view('krama.index', [
            'title' => 'Krama',
            'krama' => $krama
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('krama.create', [
            'title' => 'Krama',
            'krama' => Krama::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'material_id' => 'required',
            'ngoko' => 'required|max:255',
            'krama_madya' => 'required|max:255',
            'krama_inggil' => 'required|max:255'
        ]);

        Krama::create($validatedData);
        return redirect('/krama')->with('success', 'New data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Krama  $krama
     * @return \Illuminate\Http\Response
     */
    public function show(Krama $krama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Krama  $krama
     * @return \Illuminate\Http\Response
     */
    public function edit(Krama $krama)
    {
        return view('krama.edit', [
            'title' => 'Krama',
            'krama' => $krama
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Krama  $krama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Krama $krama)
    {
        $validatedData = $request->validate([
            'material_id' => 'required',
            'ngoko' => 'required|max:255',
            'krama_madya' => 'required|max:255',
            'krama_inggil' => 'required|max:255'
        ]);

        Krama::where('id', $krama->id)
                -> update($validatedData);
        return redirect('/krama')->with('success', 'Data has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Krama  $krama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Krama $krama)
    {
          Krama::destroy($krama->id);
          return redirect('/krama')->with('success', 'Data has been deleted');
    }
}
