<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use App\Http\Requests\PlanetRequest;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', compact('planets'));
    }
    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', compact('planet'));
    }
    public function create()
    {
        return view('planets.create');
    }
    public function store(PlanetRequest $request)  
    {
        $planet = new Planet;

        $planet->name = $request->name;
        $planet->english_name = $request->english_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();

        return redirect('/planets');
    }
    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit',compact('planet'));
    }

    public function update(PlanetRequest $request, $id)
    {
        $planet = Planet::find($id);

        $planet->name = $request->name;
        $planet->english_name = $request->english_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();

        return redirect('/planets');
    }
    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();

        return redirect('/planets');
    }
}