<?php

namespace App\Http\Controllers;

use App\Models\Gamelan;
use App\Models\Material;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;


class GamelanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 5;
        $gamelan = Gamelan::first()->paginate($pagination);

        return view('gamelan.index', [
            'title' => 'Gamelan',
            'gamelans' => $gamelan
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gamelan.create', [
            'title' => 'Gamelan',
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
            'image' => 'required',
            'credit' => 'required'
        ]);

        Gamelan::create($validatedData);
        return redirect('/gamelan')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gamelan  $gamelan
     * @return \Illuminate\Http\Response
     */
    public function show(Gamelan $gamelan)
    {
        return view('gamelan.show', [
            'title' => 'Gamelan',
            'gamelan' => $gamelan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gamelan  $gamelan
     * @return \Illuminate\Http\Response
     */
    public function edit(Gamelan $gamelan)
    {
        return view('gamelan.edit', [
            'title' => 'Gamelan',
            'gamelan' => $gamelan,
            // 'materials' => Material::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gamelan  $gamelan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gamelan $gamelan)
    {
        $rules = [
            'material_id' => 'required',
            'name' => 'required|max:255',
            'image' => 'required',
            'credit' => 'required'
        ];

        if($request->slug != $gamelan->slug) {
            $rules['slug'] = 'required|max:255';
        }

        $validatedData = $request->validate($rules);
        

        Gamelan::where('id', $gamelan->id)
                ->update($validatedData);
        return redirect('/gamelan')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gamelan  $gamelan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gamelan $gamelan)
    {
        Gamelan::destroy($gamelan->id);
        return redirect('/gamelan')->with('success', 'Data has been deleted');
    }

    
    // Check Slug
    public function checkSlug(Request $request) 
    {
        $slug = SlugService::createSlug(Gamelan::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
