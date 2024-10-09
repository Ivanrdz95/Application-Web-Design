<?php



namespace App\Http\Controllers;

use App\Superhero; 
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;



class SuperheroController extends Controller
{
    // Show all superheroes
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    // Show the form to create a new superhero
    public function create()
    {
        return view('superheroes.create');
    }

    // Store a new superhero
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'real_name' => 'required|max:255',
            'superhero_name' => 'required|max:255',
            'photo_url' => 'required|url',
            'additional_info' => 'nullable',
        ]);

        Superhero::create($validatedData);
        return redirect()->route('superheroes.index')->with('success', 'Superhero added successfully!');
    }

    // Show a specific superhero
    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    // Show the form to edit a superhero
    public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

    // Update a superhero
    public function update(Request $request, Superhero $superhero)
    {
        $validatedData = $request->validate([
            'real_name' => 'required|max:255',
            'superhero_name' => 'required|max:255',
            'photo_url' => 'required|url',
            'additional_info' => 'nullable',
        ]);

        $superhero->update($validatedData);
        return redirect()->route('superheroes.index')->with('success', 'Superhero updated successfully!');
    }

    // Delete a superhero
    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect()->route('superheroes.index')->with('success', 'Superhero deleted successfully!');
    }
}
