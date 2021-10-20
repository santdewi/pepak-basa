<?php

namespace App\Http\Controllers;

use App\Models\Pamasastra;
use App\Models\Pcategories;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class PamasastraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 5;
        $pamasastra = Pamasastra::first()->paginate($pagination);
        return view('/pamasastra.index', [
            'title' => 'Pamasastra',
            'pamasastra' => $pamasastra
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pamasastra.create', [
            'title' => 'Pamasastra',
            'pcategories' => Pcategories::all()
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
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'material_id' => 'required',
            'pcategory_id' => 'required',
            'materi' => 'required|image'
        ]);

        $validatedData['materi'] = $request->file('materi')->store('pamasastra-materi');

        Pamasastra::create($validatedData);
        return redirect('/pamasastra')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pamasastra  $pamasastra
     * @return \Illuminate\Http\Response
     */
    public function show(Pamasastra $pamasastra)
    {
        return view('pamasastra.show', [
            'title' => 'Pamasastra',
            'pamasastra' => $pamasastra
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pamasastra  $pamasastra
     * @return \Illuminate\Http\Response
     */
    public function edit(Pamasastra $pamasastra)
    {
        return view('pamasastra.edit', [
            'title' => 'Pamasastra',
            'pamasastra' => $pamasastra,
            'pcategories' => Pcategories::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pamasastra  $pamasastra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pamasastra $pamasastra)
    {
        $rules = [
            'name' => 'required|max:255',
            'material_id' => 'required',
            'pcategory_id' => 'required',
            'materi' => 'image'
        ];

        if($request->slug != $pamasastra->slug) {
            $rules['slug'] = 'required|max:255';
        }

        $validatedData = $request->validate($rules);

        if($request->file('materi'))  {
            if($request->oldMateri) {
                Storage::delete($request->oldMateri);
            }
            $validatedData['materi'] = $request->file('materi')->store('pamasastra-materi');
        }

        Pamasastra::where('id', $pamasastra->id)
                ->update($validatedData);
        return redirect('/pamasastra')->with('success', 'Data has been upadated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pamasastra  $pamasastra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pamasastra $pamasastra)
    {
        if($pamasastra->materi) {
            Storage::delete($pamasastra->materi);
        }
        Pamasastra::destroy($pamasastra->id);
        return redirect('/pamasastra')->with('success', 'Data has been deleted');
    }

    // Check Slug
    public function checkSlug(Request $request) 
    {
        $slug = SlugService::createSlug(Pamasastra::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
