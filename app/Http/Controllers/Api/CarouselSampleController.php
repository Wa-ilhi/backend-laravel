<?php

namespace App\Http\Controllers\Api;

use App\Models\CarouselSample;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarouselSampleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return CarouselSample::all();
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
        return CarouselSample::findOrfail($id);
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
        $carousel = CarouselSample::findOrfail($id);

        $carousel->delete();


        return  $carousel;
    }
}
