<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidateRequest;
use App\Models\Secretary;

class SecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('candidates.secretary.create', [
            'secretaries' => Secretary::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CandidateRequest $request)
    {
        $validatedData = $request->validated();
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = basename($imagePath);
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }
    
        $validatedData['votes'] = 0;
    
        Secretary::create($validatedData);
    
        return redirect()->route('secretaries.create')->with('success', 'Secretary candidate created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Secretary $secretary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Secretary $secretary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CandidateRequest $request, Secretary $secretary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Secretary $secretary)
    {
        $secretary->delete();

        return redirect()->route('secretaries.create')->with('success', 'Candidate for president Has been deleted!');
    }
}
