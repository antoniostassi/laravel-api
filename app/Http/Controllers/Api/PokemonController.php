<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


// Model

use App\Models\Pokemon;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $pokemons = Pokemon::with('generation' , 'types'); // It calls the model functions to get generation and types.
        $pokemons = $pokemons->paginate(10); // It paginates 10 
        return response()->json($pokemons);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pokemon = Pokemon::with('generation', 'types')
        ->where('id', $id)
        ->first();

        if ($pokemon) { // if truthy
            return response()->json([
                'success' => true,
                'message' => 'Here you can find your Pokémon',
                'pokemon' => $pokemon
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Pokémon not found'
            ], 404);
        }

    }

}
