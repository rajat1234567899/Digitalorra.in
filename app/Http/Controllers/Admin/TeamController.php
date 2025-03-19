<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() {
        $teams = Team::latest()->get();
        return view('admin.team.index', compact('teams'));
    }

    public function create() {
        return view('admin.team.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('teams', 'public');

        Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.teams.index')->with('success', 'Team member added successfully.');
    }

    public function destroy(Team $team) {
        $team->delete();
        return redirect()->route('admin.teams.index')->with('success', 'Team member deleted.');
    }
    
    public function edit(Team $team) {
        return view('admin.team.edit', compact('team'));
    }
    
    public function update(Request $request, Team $team) {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('teams', 'public');
            $team->image = $imagePath;
        }
    
        $team->name = $request->name;
        $team->position = $request->position;
        $team->save();
    
        return redirect()->route('admin.teams.index')->with('success', 'Team member updated successfully.');
    }
    
}
