<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{


    public function validation($data)
    {
        $validated = Validator::make($data, [
            "title" => "required|min:5|max:50",
            "description" => "required|min:5|max:255",
            "thumb" => "",
            "price" => "required",
            "series" => "required|min:5|max:50",
            "sale_date" => "required",
            "type" =>"required|min:5|max:20",
        ], [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Numero massimo di caratteri superato',
            'title.min' => 'Titolo troppo corto',
            'description.required' => 'La descrizione è obbligatoria',
            'description.max' => 'Numero massimo di caratteri superato',
            'description.min' => 'La descrizione è troppo corta',
            'price.required' => 'Il prezzo è obbligatorio',
            'series.required' => 'Il campo serie è obbligatorio',
            'series.max' => 'Numero massimo di caratteri superato',
            'series.min' => 'Nome serie troppo corto',
            'sale_date.required' => 'La data di uscita è obbligatoria',
            'type.required' => 'Il campo tipologia è obbligatorio',
            'type.max' => 'Numero massimo di caratteri superato',
            'type.min' => 'Numero caratteri insufficiente',



        ])->validate();

        return $validated;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        
        return view("comics.index", compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validated_data = $this->validation($data);

        $newComic = new Comic();
        $newComic->title = $data["title"];
        $newComic->description = $data["description"];
        $newComic->thumb = $data["thumb"];
        $newComic->price = $data["price"];   
        $newComic->series = $data["series"];
        $newComic->sale_date = $data["sale_date"];
        $newComic->type = $data["type"];
        $newComic->fill($validated_data);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {

        
           $comics = Comic::find($id); 
           

          return view("comics.show", compact("comics"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $validated_data = $this->validation($data);
        /*$comic->update($data);*/
        $comic->update($validated_data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
