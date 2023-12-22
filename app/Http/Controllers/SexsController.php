<?php

namespace App\Http\Controllers;

use App\Models\Sexs;
use Illuminate\Http\Request;

class SexsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Sexs::all();
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = New Sexs;

        $event->sex_name = $request->sex_name;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(Sex $sex)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sex $sex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $event = Sexs::find($request->id);

        $event->sex_name = $request->sex_name;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;

        $event->Save();
        return $event;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sex $sex)
    {
        Sexs::destroy($id);
        return true;
    }
}
