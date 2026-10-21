<?php

namespace App\Http\Controllers;

use App\Http\Requests\{StoreTagRequest, UpdateTagRequest};
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tags = Tag::orderByDesc('id')->simplePaginate();

        if (request()->wantsJson()) {
            return $tags;
        }
        return view('tags.index', compact('tags'));

    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request)
    {
        $tag = new Tag($request->validated());
        $tag->save();

        if ($request->wantsJson()) {
            return $tag;
        }

        return redirect()->route('tags.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());

        if ($request->wantsJson()) {
            return $tag;
        }
        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        if (request()->wantsJson()) {
            return $tag;
        }

        return redirect()->route('tags.index');
    }
}
