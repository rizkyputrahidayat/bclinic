<?php

namespace App\Http\Controllers;

use App\Models\Skincare;
use Illuminate\Http\Request;

class SkincareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Skincare = Skincare::get();
        return view('Skincare.index', compact('Skincare'));
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
    public function show(Skincare $skincare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skincare $skincare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skincare $skincare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skincare $skincare)
    {
        //
    }
}
