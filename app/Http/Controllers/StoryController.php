<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Story = Story::get();
        return view('Story.index', compact('Story'));
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
        return redirect()->route('Story.index')->with('success', 'Story created successfully');
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
        return redirect()->route('Story.index')->with('success', 'Story created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Story $story)
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
            $destinationPath = 'image/Story/';
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }
    
        $face_treatment->update($input);
    
        return redirect()->route('Story.index')->with('success', 'Story updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Story $story)
    {
        $Story->delete();

        return redirect()->route('Story.index')->with('success', 'Story updated successfully');
    }
}
