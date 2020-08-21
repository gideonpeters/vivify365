<?php

namespace App\Http\Controllers;

use App\Sermon;
use Illuminate\Http\Request;

class SermonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sermons = Sermon::paginate(6);
        return response()->json([
            'status' => true,
            'message' => 'these are all the Sermons',
            'data' => $sermons
        ], 201);
    }

   
    public function show(Sermon $sermon)
    {
        //
        if(empty($sermon)){
            return response()->json([
                'status' => true,
                'message' => 'sermon post not found',
                'data' => $sermon
            ], 201);
        }

        return response()->json([
            'status' => true,
            'message' => 'this is the sermon post',
            'data' => $sermon
        ], 201);
    }

    public function getFeatured(Request $request)
    {
        //
        $featured = Sermon::where('is_featured', true)->latest()->first();
        
        if(empty($featured)){
            return response()->json([
                'status' => true,
                'message' => 'featured sermon not found',
                'data' => $featured
            ], 201);
        }

        return response()->json([
            'status' => true,
            'message' => 'this is the featured sermon',
            'data' => $featured
        ], 201);
    }

    
}
