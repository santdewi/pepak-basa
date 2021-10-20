<?php

namespace App\Http\Controllers;

use App\Models\Wayang;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class WayangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 5;
        $wayang = Wayang::first()->paginate($pagination);
        return view('wayang.index', [
            'title' => 'Wayang',
            'wayang' => $wayang
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wayang.create', [
            'title' => 'Wayang',
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
            'image' => 'required',
            'credit' => 'required'
        ]);

        Wayang::create($validatedData);
        return redirect('/wayang')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wayang  $wayang
     * @return \Illuminate\Http\Response
     */
    public function show(Wayang $wayang)
    {
        return view('wayang.show', [
            'title' => 'Wayang',
            'wayang' => $wayang,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wayang  $wayang
     * @return \Illuminate\Http\Response
     */
    public function edit(Wayang $wayang)
    {
        return view('wayang.edit', [
            'title' => 'Wayang',
            'wayang' => $wayang,
            // 'materials' => Material::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wayang  $wayang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wayang $wayang)
    {
        $rules = [
            'material_id' => 'required',
            'name' => 'required|max:255',
            'image' => 'required',
            'credit' => 'required'
        ];

        if($request->slug != $wayang->slug) {
            $rules['slug'] = 'required|max:255';
        }

        $validatedData = $request->validate($rules);
        

        Wayang::where('id', $wayang->id)
                ->update($validatedData);
        return redirect('/wayang')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wayang  $wayang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wayang $wayang)
    {
        Wayang::destroy($wayang->id);
        return redirect('/wayang')->with('success', 'Data has been deleted');
    }

    // Check Slug
    public function checkSlug(Request $request) 
    {
        $slug = SlugService::createSlug(Wayang::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
