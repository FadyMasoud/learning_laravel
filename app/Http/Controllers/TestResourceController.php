<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        echo "hello from index method";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        echo "hello from create method";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        echo "hello from store method".$request->name;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        echo "hello from show method parameter id: ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        echo "hello from edit method parameter id: ".$id;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        echo "hello from update method parameter id: ".$id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        echo "hello from destroy method parameter id: ".$id;
    }
}
