<?php

namespace App\Http\Controllers\Api;


use App\Models\CarouselSample;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarouselSampleRequest;

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
    public function store(CarouselSampleRequest $request)
    {

        $validated = $request->validated();
        $carousel = CarouselSample::create($validated);

        return $carousel;
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
    public function update(CarouselSampleRequest $request, string $id)
    {
        $validated = $request->validated();

        $carousel = CarouselSample::findOrfail($id);
        $carousel->update($validated);

        return $carousel;
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
