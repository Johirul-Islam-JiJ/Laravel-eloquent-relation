<?php

namespace App\Http\Controllers;

use App\Models\Park;
use Illuminate\Http\Request;

class ParkController extends Controller
{

    public function index()
    {
        $parks = Park::latest()->paginate();
        return view('parks.index', compact('parks'));
    }


    public function create()
    {
        return view('parks.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Park $park)
    {
        //
    }


    public function edit(Park $park)
    {
        //
    }


    public function update(Request $request, Park $park)
    {
        //
    }


    public function destroy(Park $park)
    {
        //
    }
}
