<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Brand::all();
        return $events;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in brand.
     */
    public function store(Request $request)
    {
        $event = New Brand;

        $event->nameing = $request->nameing;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in brand.
     */
    public function update(Request $request, Brand $brand)
    {
        $event = Brand::find($request->id);

        $event->nameing = $request->nameing;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;
    
    }

    /**
     * Remove the specified resource from brand.
     */
    public function destroy(Brand $brand)
    {
        Brand::destroy($id);
        return true;
    }
}
