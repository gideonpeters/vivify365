<?php

namespace App\Http\Controllers;

use App\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    
    public function index()
    {
        //
        $podcasts = Podcast::paginate(6);
        return response()->json([
            'status' => true,
            'message' => 'these are all the Podcasts',
            'data' => $podcasts
        ], 201);
    }

   
    public function show(Podcast $podcast)
    {
        //
        if(empty($podcast)){
            return response()->json([
                'status' => true,
                'message' => 'podcast post not found',
                'data' => $podcast
            ], 201);
        }

        return response()->json([
            'status' => true,
            'message' => 'this is the podcast post',
            'data' => $podcast
        ], 201);
    }

    public function getFeatured(Request $request)
    {
        //
        $featured = Podcast::where('is_featured', true)->latest()->first();
        
        if(empty($featured)){
            return response()->json([
                'status' => true,
                'message' => 'featured podcast not found',
                'data' => $featured
            ], 201);
        }

        return response()->json([
            'status' => true,
            'message' => 'this is the featured podcast',
            'data' => $featured
        ], 201);
    }

}
