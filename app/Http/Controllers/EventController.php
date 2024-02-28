<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('backend.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,size:2048',
            'category' => 'required',
            'city' => 'required',
            'date' => 'required',
            'location' => 'required',
            'google_map_link' => 'required',
            'google_map_embed' => 'required',
            'status' => 'required',
            'attribute' => 'nullable',
        ], [
            'name.required' => 'Event name is required',
            'description.required' => 'Event description is required',
            'image.required' => 'Event image is required',
            'image.mimes' => 'Event image must be a file of type: png, jpg, jpeg',
            'image.size' => 'Event image size must be less than 2MB',
            'category.required' => 'Event category is required',
            'city.required' => 'Event city is required',
            'date.required' => 'Event date is required',
            'location.required' => 'Event location is required',
            'google_map_link.required' => 'Event Google Map link is required',
            'google_map_embed.required' => 'Event Google Map embed is required',
            'status.required' => 'Event status is required',
        ]);

        $events = $request->hasFile('image') ? $request->file('image')->store('Events Images', 'public') : null;
        if ($request->status == 'sudah') {
            $validatedData['attribute'] = 'filter-app';
        } elseif ($request->status == 'belum') {
            $validatedData['attribute'] = 'filter-web';
        }

        Event::create(array_merge($validatedData, ['image' => $events]));

        return redirect()->route('event.index')->with('success', 'Event has been created successfully');
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
        return view('backend.event.edit', ['event' => Event::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $event = Event::find($id);
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,size:2048',
            'category' => 'required',
            'city' => 'required',
            'date' => 'required',
            'location' => 'required',
            'google_map_link' => 'required',
            'google_map_embed' => 'required',
            'status' => 'required',
            'attribute' => 'nullable',
        ], [
            'name.required' => 'Event name is required',
            'description.required' => 'Event description is required',
            'image.mimes' => 'Event image must be a file of type: png, jpg, jpeg',
            'image.size' => 'Event image size must be less than 2MB',
            'category.required' => 'Event category is required',
            'city.required' => 'Event city is required',
            'date.required' => 'Event date is required',
            'location.required' => 'Event location is required',
            'google_map_link.required' => 'Event Google Map link is required',
            'google_map_embed.required' => 'Event Google Map embed is required',
            'status.required' => 'Event status is required',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($event->image);
            $events = $request->file('image')->store('Events Images', 'public');
        } else {
            $events = $event->image;
        }

        if ($request->status == 'sudah') {
            $validatedData['attribute'] = 'filter-app';
        } elseif ($request->status == 'belum') {
            $validatedData['attribute'] = 'filter-web';
        }

        $event->update(array_merge($validatedData, ['image' => $events]));
        return redirect()->route('event.index')->with('success', 'Event has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $events = Event::find($id);
        Storage::disk('public')->delete($events->image);
        $events->delete();
        return redirect()->route('event.index')->with('success', 'Event has been deleted successfully');
    }
}
