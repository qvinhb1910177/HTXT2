<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHoctapRequest;
use App\Http\Resources\HoctapResource;
use App\Models\Hoctap;
use Illuminate\Http\Request;

class HoctapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoctaps = Hoctap::all();
        return HoctapResource::collection($hoctaps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHoctapRequest $request)
    {
        $hoctaps = Hoctap::create($request->all());

        return new HoctapResource($hoctaps);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hoctap  $hoctap
     * @return \Illuminate\Http\Response
     */
    public function show(Hoctap $hoctap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hoctap  $hoctap
     * @return \Illuminate\Http\Response
     */
    public function edit(Hoctap $hoctap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hoctap  $hoctap
     * @return \Illuminate\Http\Response
     */
    public function update(StoreHoctapRequest $request, Hoctap $hoctap)
    {
        $hoctap->update($request->all());

        return new HoctapResource($hoctap);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hoctap  $hoctap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hoctap $hoctap)
    {
        $hoctap->delete();

        return response(null, 204);
    }
}
