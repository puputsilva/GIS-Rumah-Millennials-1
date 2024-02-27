<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Program::all();
        return view('backend.programs.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programs = Program::all();
        return view('backend.programs.create', compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ], [
            'icon.required' => 'Icon Link Required.',
            'title.required' => 'Title Program Required',
            'description.required' => 'Description Program Required',
        ]);

        Program::create($validatedData);
        return redirect()->route('program.index')->with('success', 'Program Created Successfully');
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
        $programs = Program::findOrFail($id);
        return view('backend.programs.edit', compact('programs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $program = Program::findOrFail($id);

        $validatedData = $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ], [
            'icon.required' => 'The icon field is required.',
            'title.required' => 'The title field is required.',
            'description.required' => 'The description field is required.',
        ]);

        $program->update($validatedData);
        return redirect()->route('program.index')->with('success', 'Program Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = Program::findOrFail($id);
        $program->delete();
        return redirect()->route('program.index')->with('success', 'Program Deleted Successfully');
    }
}
