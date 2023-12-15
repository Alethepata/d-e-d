<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Http\Requests\CharacterRequest;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::all();
        return view('admin.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create Character';
        $route = route('admin.characters.store');
        $method = 'POST';
        $character = null;
        return view('admin.characters.create-edit', compact('title', 'route', 'method', 'character'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CharacterRequest $request)
    {
        $form_data = $request->all();

        $new_character = new Character();
        $new_character->fill($form_data);

        $new_character->save();


        return redirect()->route('admin.characters.show', $new_character);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {


        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        $title = 'Edit Character';
        $route = route('admin.characters.update', $character);
        $method = 'PUT';
        return view('admin.characters.create-edit', compact('title', 'route', 'method', 'character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CharacterRequest $request, Character $character)
    {
        $form_data = $request->all();

        $character->update($form_data);

        return redirect()->route('admin.characters.show', $character);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('admin.characters.index');
    }
}
