<?php

namespace App\Http\Controllers;

use App\Models\PostMeta;
use App\Http\Requests\StorePostMetaRequest;
use App\Http\Requests\UpdatePostMetaRequest;

class PostMetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePostMetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostMetaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostMeta  $postMeta
     * @return \Illuminate\Http\Response
     */
    public function show(PostMeta $postMeta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostMeta  $postMeta
     * @return \Illuminate\Http\Response
     */
    public function edit(PostMeta $postMeta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostMetaRequest  $request
     * @param  \App\Models\PostMeta  $postMeta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostMetaRequest $request, PostMeta $postMeta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostMeta  $postMeta
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostMeta $postMeta)
    {
        //
    }
}
