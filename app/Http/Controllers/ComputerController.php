<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
//use Illuminate\Support\Facades\DB;
class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = Computer::all();
        //dd($computers);
        return view('computers.index', compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $computer = new Computer();
        $computer->brand=$request->txt_brand;
        $computer->specification=$request->txt_specification;
        $computer->condition=$request->txt_condition;
        $computer->price=$request->txt_price;
        $computer->save();
        return redirect()->route('computers.index');
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
        $computer = Computer::findOrFail($id);
        return view('computers.edit',compact('computer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $computer = Computer::findOrFail($id);
        $computer->brand=$request->txt_brand;
        $computer->specification=$request->txt_specification;
        $computer->condition=$request->txt_condition;
        $computer->price=$request->txt_price;
        $computer->update();
        return redirect()->route('computers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $computer = Computer::findOrFail($id);
        $computer->delete();
        return redirect()->route('computers.index');
    }
}
