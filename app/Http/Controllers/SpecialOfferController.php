<?php

namespace App\Http\Controllers;

use App\Models\SpecialOffer;
use Illuminate\Http\Request;

class SpecialOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $special_offer = SpecialOffer::get();
        return view('special_offer.index', compact('special_offer'));
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
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = '';
        if ($image = $request->file('image')) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('image/special_offer', $imageName);
        }
        SpecialOffer::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'image' => $imageName
        ]);
        return redirect()->route('special_offer.index')->with('success', 'SpecialOffer Created successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpecialOffer $special_offer)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/special_offer/';
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        } else {
            unset($input['image']);
        }

        $special_offer->update($input);

        return redirect()->route('special_offer.index')->with('success', 'SpecialOffer updated successfully');
    }

    public function destroy(SpecialOffer $special_offer)
    {
        $special_offer->delete();

        return redirect()->route('special_offer.index')
            ->with('success', 'SpecialOffer deleted successfully');
    }
}
