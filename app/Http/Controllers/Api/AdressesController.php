<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdressesRequest;
use App\Http\Resources\AdressesResource;
use App\Models\Adresses;
use Illuminate\Http\Request;

class AdressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adressess = Adresses::all();
        return AdressesResource::collection($adressess);
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
    public function store(StoreAdressesRequest $request)
    {
        $adressess = Adresses::create($request->all());

        return new AdressesResource($adressess);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adresses  $adresses
     * @return \Illuminate\Http\Response
     */
    public function show(Adresses $adresses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adresses  $adresses
     * @return \Illuminate\Http\Response
     */
    public function edit(Adresses $adresses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adresses  $adresses
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAdressesRequest $request, Adresses $adresses)
    {
        $adresses->update($request->all());

        return new AdressesResource($adresses);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adresses  $adresses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adresses $adresses)
    {
        $adresses->delete();

        return response(null, 204);
    }
}
