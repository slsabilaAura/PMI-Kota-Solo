<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('relawan.dashboard');
    }
    public function index_lapsit()
    {
        //
        return view('relawan.lapsit.index');
    }
    public function index_assessment()
    {
        //
        return view('relawan.assessment.index');
    }
    /**
     * Show the form for creating a new resource.
     */

    public function create_assesment()
    {
        //
    }
    public function create_lapsit()
    {
        //
        return view('relawan.lapsit.create');
    }

    public function edit_lapsit()
    {
        //
        return view('relawan.lapsit.edit');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}