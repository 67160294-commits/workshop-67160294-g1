<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index()
    {
        $pokedexs = Pokedex::all();
        return view('pokedexs.index', compact('pokedexs'));
    }

    public function create()
    {
        return view('pokedexs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'hp' => 'required|numeric',
            'attack' => 'required|numeric',
            'defense' => 'required|numeric',
            'image_url' => 'required|url',
        ]);

        Pokedex::create($request->all());

        return redirect()->route('pokedexs.index')
            ->with('success', 'เพิ่มข้อมูล Pokémon สำเร็จแล้ว');
    }

    public function show($id)
    {
        $pokedex = Pokedex::findOrFail($id);
        return view('pokedexs.show', compact('pokedex'));
    }

    public function edit($id)
    {
        $pokedex = Pokedex::findOrFail($id);
        return view('pokedexs.edit', compact('pokedex'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'hp' => 'required|numeric',
            'attack' => 'required|numeric',
            'defense' => 'required|numeric',
            'image_url' => 'required|url',
        ]);

        $pokedex = Pokedex::findOrFail($id);
        $pokedex->update($request->all());

        return redirect()->route('pokedexs.index')
            ->with('success', 'อัพเดทข้อมูล Pokémon สำเร็จแล้ว');
    }

    public function destroy($id)
    {
        $pokedex = Pokedex::findOrFail($id);
        $pokedex->delete();

        return redirect()->route('pokedexs.index')
            ->with('success', 'ลบข้อมูล Pokémon สำเร็จแล้ว');
    }
}
