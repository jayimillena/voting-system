<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\{
    Auditor,
    BusinessManager,
    PeaceOfficer,
    PIO,
    President,
    Secretary,
    Treasurer,
    VicePresident
};
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('candidate', [
            'president_counts' => President::count(),
            'vice_president_counts' => VicePresident::count(),
            'secretary_counts' => Secretary::count(),
            'treasurer_counts' => Treasurer::count(),
            'pio_counts' => PIO::count(),
            'business_manager_counts' => BusinessManager::count(),
            'auditor_counts' => Auditor::count(),
            'peace_officer_counts' => PeaceOfficer::count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
