<?php

namespace App\Http\Controllers;

use App\Models\Division;
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
        $divisions = Division::orderBy('name')->get();
        return view('parks.create', compact('divisions'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['nullable', 'numeric', 'gt:0'],
        ]);

        if (Park::create($valid)) {
            return redirect()->route('parks.index')->with('success', 'Park Created Successfully');
        }

        return back()->with('error', 'Something went wrong');

    }

    public function show(Park $park)
    {
        return view('parks.show', compact('park'));
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
        if ($park->delete()) {
            return back()->with('success', 'Park Deleted Successfully');
        }

        return back()->with('error', 'Something went wrong');

    }

    public function assignDivisionForm(Park $park)
    {
        $divisions = Division::orderBy('name')->get();
        return view('parks.assign-division', compact('park', 'divisions'));
    }

    public function assignDivision(Request $request, Park $park)
    {
        $valid = $request->validate([
            'division_id' => ['required', 'integer', 'gt:0'],
        ]);

        if ($park->divisions()->sync([$valid['division_id']], false)) {
            return redirect()->route('parks.show', $park)->with('success', 'Author Assigned Successfully');
        }

        return back()->with('error', 'Something went wrong');
    }
}
