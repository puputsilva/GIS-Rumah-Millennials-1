<?php

namespace App\Http\Controllers;

use App\Models\QnA;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class QnAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qnas = QnA::all();
        return view('backend.qnas.index', compact('qnas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.qnas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ], [
            'question.required' => 'Question Required.',
            'answer.required' => 'Answer Required',
        ]);

        QnA::create($validatedData);
        return redirect()->route('qna.index')->with('success', 'QnA Created Successfully');
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
        $qna = QnA::findOrFail($id);
        return view('backend.qnas.edit', compact('qna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $qnas = QnA::findOrFail($id);

        $validatedData = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ], [
            'question.required' => 'Question Required.',
            'answer.required' => 'Answer Required',
        ]);

        $qnas->update($validatedData);
        return redirect()->route('qna.index')->with('success', 'QnA Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $qnas = QnA::findOrFail($id);
        $qnas->delete();
        return redirect()->route('qna.index')->with('success', 'QnA Deleted Successfully');
    }
}
