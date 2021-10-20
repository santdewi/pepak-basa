<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 10;
        $material = Material::first()->paginate($pagination);

        return view('materi.index', [
            'title' => 'Materi',
            'materials' => $material
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materi.create', [
            'title' => 'Materi'
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
            'message' => 'max:1000'
        ]);

        Material::create($validatedData);
        return redirect('/materi')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        // return view('materi.show', [
        //     'title' => 'Materi',
        //     'material' => $material
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        return view('materi.edit', [
            'title' => 'Materi',
            'material' => $material,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        $rules = [
            'name' => 'required|max:255',
            'message' => 'max:1000'
        ];

        if($request->slug != $material->slug) {
            $rules['slug'] = 'required|max:255';
        }

        $validatedData = $request->validate($rules);

        Material::where('id', $material->id)
                ->update($validatedData);
        return redirect('/materi')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        Material::destroy($material->id);
        return redirect('/materi')->with('success', 'Data has been deleted');
    }

    // Check Slug
    public function checkSlug(Request $request) 
    {
        $slug = SlugService::createSlug(Material::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }


}
