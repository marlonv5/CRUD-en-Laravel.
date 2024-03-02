<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobils = Mobil::all();
        //dd($computers);
        return view('mobils.index', compact('mobils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobils.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $mobil = new Mobil();
        $mobil->name=$request->txt_name;
        $mobil->brand=$request->txt_brand;
        $mobil->country=$request->txt_country;
        $mobil->stock=$request->txt_stock;
        $mobil->price=$request->txt_price;
        $mobil->save();
        return redirect()->route('mobils.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobils.edit',compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->name=$request->txt_name;
        $mobil->brand=$request->txt_brand;
        $mobil->country=$request->txt_country;
        $mobil->stock=$request->txt_stock;
        $mobil->price=$request->txt_price;
        $mobil->update();
        return redirect()->route('mobils.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('mobils.index');
    }
}
