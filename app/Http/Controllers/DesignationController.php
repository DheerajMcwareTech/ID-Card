<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entries = Designation::get();
        return view('admin.designation.index', compact('entries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.designation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Designation::create(['name' => $request->name]);
        \Session::flash('success', 'Success');
        return redirect()->route('designation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $designation)
    {
        return view('admin.designation.view', compact('designation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Designation $designation)
    {
        return view('admin.designation.edit', compact('designation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Designation $designation)
    {
        $designation->update(['name'=>$request->name]);
        \Session::flash('success', 'Success');
        return redirect()->route('designation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation)
    {
        //
    }
}
