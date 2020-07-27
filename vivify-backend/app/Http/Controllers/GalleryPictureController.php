<?php

namespace App\Http\Controllers;

use App\GalleryPicture;
use Illuminate\Http\Request;

class GalleryPictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gallery_pictures = GalleryPicture::paginate(10);

        return response()->json([
            'status' => true,
            'message' => 'these are all the gallery pictures',
            'data' => $gallery_pictures
        ], 201);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GalleryPicture  $galleryPicture
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryPicture $galleryPicture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GalleryPicture  $galleryPicture
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleryPicture $galleryPicture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GalleryPicture  $galleryPicture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GalleryPicture $galleryPicture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GalleryPicture  $galleryPicture
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryPicture $galleryPicture)
    {
        //
    }
}
