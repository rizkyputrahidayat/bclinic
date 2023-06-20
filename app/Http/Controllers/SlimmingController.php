<?php

namespace App\Http\Controllers;

use App\Models\Slimming;
use Illuminate\Http\Request;

class SlimmingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slimming = Slimming::get();
        return view('slimming.index', compact('slimming'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
            $image->move('image/slimming', $imageName);
        }
        Slimming::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => $imageName
        ]);
        return redirect()->route('slimming.index')->with('success', 'Slimming Created successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slimming $slimming)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/slimming/';
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        } else {
            unset($input['image']);
        }

        $slimming->update($input);

        return redirect()->route('slimming.index')->with('success', 'Slimming updated successfully');
    }

    public function destroy(Slimming $slimming)
    {
        $slimming->delete();

        return redirect()->route('slimming.index')
            ->with('success', 'Slimming deleted successfully');
    }
}
