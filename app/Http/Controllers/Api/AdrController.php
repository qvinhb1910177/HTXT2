<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdrRequest;
use App\Http\Resources\AdrResource;
use App\Models\Adr;
use Illuminate\Http\Request;

class AdrController extends Controller
{       
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adrs = Adr::all();
        return AdrResource::collection($adrs);
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
    public function store(StoreAdrRequest $request)
    {
        $adrs = Adr::create($request->all());

        return new AdrResource($adrs);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adr  $adr
     * @return \Illuminate\Http\Response
     */
    public function show(Adr $adr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adr  $adr
     * @return \Illuminate\Http\Response
     */
    public function edit(Adr $adr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adr  $adr
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAdrRequest $request, Adr $adr)
    {
        $adr->update($request->all());

        return new AdrResource($adr);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adr  $adr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adr $adr)
    {
        $adr->delete();

        return response(null, 204);
    }
}
