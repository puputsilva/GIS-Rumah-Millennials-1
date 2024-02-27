<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('backend.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]*$/',
            'position' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ], [
            'name.required' => 'Name is required',
            'name.regex' => 'Name must be alphabets only',
            'position.required' => 'Position is required',
            'image.required' => 'Image is required',
            'image.mimes' => 'Image must be of type jpg, png, jpeg, gif, svg',
            'image.max' => 'Image must be less than 2MB',
            'facebook.url' => 'Facebook must be a valid URL',
            'twitter.url' => 'Twitter must be a valid URL',
            'instagram.url' => 'Instagram must be a valid URL',
            'linkedin.url' => 'Linkedin must be a valid URL',
        ]);


        $image = $request->hasFile('image') ? $request->file('image')->store('Teams Images', 'public') : null;
        Team::create(array_merge($validatedData, ['image' => $image]));

        return redirect()->route('team.index')->with('success', 'Team member added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team::find($id);
        return view('backend.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $team = Team::find($id);
        $validatedData = request()->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]*$/',
            'position' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ], [
            'name.required' => 'Name is required',
            'name.regex' => 'Name must be alphabets only',
            'position.required' => 'Position is required',
            'image.mimes' => 'Image must be of type jpg, png, jpeg, gif, svg',
            'image.max' => 'Image must be less than 2MB',
            'facebook.url' => 'Facebook must be a valid URL',
            'twitter.url' => 'Twitter must be a valid URL',
            'instagram.url' => 'Instagram must be a valid URL',
            'linkedin.url' => 'Linkedin must be a valid URL',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($team->image);
            $image = $request->file('image')->store('Teams Images', 'public');
            $team->update(array_merge($validatedData, ['image' => $image]));
        } else {
            $team->update($validatedData);
        }

        return redirect()->route('team.index')->with('success', 'Team member updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);
        Storage::disk('public')->delete($team->image);
        $team->delete();
        return redirect()->route('team.index')->with('success', 'Team member deleted successfully');
    }
}
