<?php

namespace App\Http\Controllers;

use App\Models\Lookup;
use App\Http\Requests\StoreLookupRequest;
use App\Http\Requests\UpdateLookupRequest;

class LookupController extends Controller
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
        return view('lookups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLookupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Lookup $lookup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lookup $lookup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLookupRequest $request, Lookup $lookup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lookup $lookup)
    {
        //
    }
}
