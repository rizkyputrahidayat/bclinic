<?php

namespace App\Http\Controllers;

use App\Models\face_treatment;
use Illuminate\Http\Request;

class FaceTreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $FaceTreatment = Face_Treatment::get();
        return view('FaceTreatment.index', compact('FaceTreatment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $request->validate([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => $imageName
        ]);
        return redirect()->route('FaceTreatment.index')->with('success', 'FaceTreatment created successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        $imageName = '';
        if ($image = $request->file('image')) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('image/FaceTreatment', $imageName);
        }
    
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ];
        return redirect()->route('FaceTreatment.index')->with('success', 'FaceTreatment created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(face_treatment $face_treatment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(face_treatment $face_treatment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, face_treatment $face_treatment)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    
        $input = [
            'title' => $request->title,
            'description' => $request->description,
        ];
    
        if ($image = $request->file('image')) {
            $destinationPath = 'image/FaceTreatment/';
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }
    
        $face_treatment->update($input);
    
        return redirect()->route('FaceTreatment.index')->with('success', 'FaceTreatment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(face_treatment $face_treatment)
    {
        $face_treatment->delete();

        return redirect()->route('FaceTreatment.index')
            ->with('success', 'FaceTreatment deleted successfully');
    }
}
