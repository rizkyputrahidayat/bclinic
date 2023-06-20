<?php

namespace App\Http\Controllers;

use App\Models\Facial;
use Illuminate\Http\Request;

class FacialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facial = Facial::get();
        return view('facial.index', compact('facial'));
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
            $image->move('image/facial', $imageName);
        }
        Facial::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => $imageName
        ]);
        return redirect()->route('facial.index')->with('success', 'Facial Created successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facial $facial)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/facial/';
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        } else {
            unset($input['image']);
        }

        $facial->update($input);

        return redirect()->route('facial.index')->with('success', 'Facial updated successfully');
    }

    public function destroy(Facial $facial)
    {
        $facial->delete();

        return redirect()->route('facial.index')
            ->with('success', 'Facial deleted successfully');
    }
}
