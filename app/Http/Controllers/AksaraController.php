<?php

namespace App\Http\Controllers;

use App\Models\Aksara;
use App\Models\Material;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class AksaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 5;
        $aksara = Aksara::first()->paginate($pagination);

        return view('aksara.index', [
            'title' => 'Aksara Jawa',
            'aksara' => $aksara
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aksara.create', [
            'title' => 'Aksara',
            'materials' => Material::all()
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
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'materi' => 'required|image',
            'contoh' => 'required|image',
            'message' => 'required'
        ]);

        $validatedData['materi'] = $request->file('materi')->store('aksara-materi');
        $validatedData['contoh'] = $request->file('contoh')->store('aksara-contoh');

        Aksara::create($validatedData);
        return redirect('/aksara')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aksara  $aksara
     * @return \Illuminate\Http\Response
     */
    public function show(Aksara $aksara)
    {
        return view('aksara.show', [
            'title' => 'Aksara',
            'aksara' => $aksara
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aksara  $aksara
     * @return \Illuminate\Http\Response
     */
    public function edit(Aksara $aksara)
    {
        return view('aksara.edit', [
            'title' => 'Aksara',
            'aksara' => $aksara,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aksara  $aksara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aksara $aksara)
    {
        $rules = [
            'material_id' => 'required',
            'name' => 'required|max:255',
            'materi' => 'image',
            'contoh' => 'image',
            'message' => 'required'
        ];

        if($request->slug != $aksara->slug) {
            $rules['slug'] = 'required|max:255';
        }

        $validatedData = $request->validate($rules);

        if($request->file('materi'))  {
            if($request->oldMateri) {
                Storage::delete($request->oldMateri);
            }
            $validatedData['materi'] = $request->file('materi')->store('aksara-materi');
        }

        if($request->file('contoh')) {
            if($request->oldContoh) {
                Storage::delete($request->oldContoh);
            }
            $validatedData['contoh'] = $request->file('contoh')->store('aksara-contoh');
        }

        Aksara::where('id', $aksara->id)
                ->update($validatedData);
        return redirect('/aksara')->with('success', 'Data has been upadated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aksara  $aksara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aksara $aksara)
    {
        if($aksara->materi) {
            Storage::delete($aksara->materi);
        }
        if($aksara->contoh) {
            Storage::delete($aksara->contoh);
        }
        Aksara::destroy($aksara->id);
        return redirect('/aksara')->with('success', 'Data has been deleted');
    }

    // Check Slug
    public function checkSlug(Request $request) 
    {
        $slug = SlugService::createSlug(Aksara::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
