<?php

namespace App\Http\Controllers;

use App\Models\Artik;
use Illuminate\Http\Request;

class ArtikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artik = Artik::get();
        return view('artik.index', compact('artik'));
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
            $image->move('image/artik', $imageName);
        }
        Artik::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'image' => $imageName
        ]);
        return redirect()->route('artik.index')->with('success', 'Artik Created successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artik $artik)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/artik/';
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        } else {
            unset($input['image']);
        }

        $artik->update($input);

        return redirect()->route('artik.index')->with('success', 'Artik updated successfully');
    }

    public function destroy(Artik $artik)
    {
        $artik->delete();

        return redirect()->route('artik.index')
            ->with('success', 'Artik deleted successfully');
    }
}
