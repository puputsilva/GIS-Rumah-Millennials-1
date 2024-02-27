<?php

namespace App\Http\Controllers;

use App\Models\Partnership;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PartnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $image = Partnership::all();
        return view('backend.partnership.index', compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.partnership.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.required' => 'Please enter the name',
            'image.required' => 'Please choose an image',
            'image.image' => 'The file must be an image',
            'image.mimes' => 'The image must be of type: jpeg, png, jpg, gif, svg',
            'image.max' => 'The image must be less than 2MB'
        ]);

        $partnership = $request->hasFile('image') ? $request->file('image')->store('Partnerships Images', 'public') : null;
        Partnership::create(array_merge($validatedData, ['image' => $partnership]));

        return redirect()->route('partnership.index')->with('success', 'Partnership added successfully');
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
        $partnership = Partnership::find($id);
        return view('backend.partnership.edit', compact('partnership'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $partnership = Partnership::find($id);
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'image.image' => 'The file must be an image',
            'image.mimes' => 'The image must be of type: jpeg, png, jpg, gif, svg',
            'image.max' => 'The image must be less than 2MB'
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($partnership->image);
            $image = $request->file('image')->store('Partnerships Images', 'public');
            $partnership->update(array_merge($validatedData, ['image' => $image]));
        } else {
            $partnership->update($validatedData);
        }

        return redirect()->route('partnership.index')->with('success', 'Partnership updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partnership = Partnership::find($id);
        Storage::disk('public')->delete($partnership->image);
        $partnership->delete();
        return redirect()->route('partnership.index')->with('success', 'Partnership deleted successfully');
    }
}
