<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'owner_name' => 'required',
            'type' => 'required',
            'plate_number' => 'required',
        ]);

        Vehicle::create([
            'owner_name' => $request->owner_name,
            'type' => $request->type,
            'plate_number' => $request->plate_number,
        ]);

        return redirect()->route('vehicles.index')->with('success', 'Vehicle added!');
    }

    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'owner_name' => 'required',
            'type' => 'required',
            'plate_number' => 'required',
        ]);

        $vehicle = Vehicle::findOrFail($id);

        $vehicle->update([
            'owner_name' => $request->owner_name,
            'type' => $request->type,
            'plate_number' => $request->plate_number,
        ]);

        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated!');
    }

    public function destroy($id)
    {
        Vehicle::findOrFail($id)->delete();

        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted!');
    }
}