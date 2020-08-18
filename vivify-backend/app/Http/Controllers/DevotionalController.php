<?php

namespace App\Http\Controllers;

use App\Devotional;
use App\Devotion;
use Illuminate\Http\Request;

class DevotionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $devotionals = Devotional::all();

        if(empty($devotionals)){
            return response()->json([
                'status' => true,
                'message' => 'devotionals not found',
                'data' => $devotional
            ], 201);
        }

        return response()->json([
            'status' => true,
            'message' => 'these are the devotional posts',
            'data' => $devotionals
        ], 201);
    }

    public function indexByCategory(Request $request, $devotion_id)
    {
        $devotion = Devotion::find($devotion_id);

        if(empty($devotion)){
            return response()->json([
                'status' => true,
                'message' => 'devotion not found',
                'data' => null
            ], 201);
        }
        $devotionals = Devotional::where('devotion_id', '=', $devotion_id)->get();

        return response()->json([
            'status' => true,
            'message' => 'these are the devotional posts',
            'data' => $devotionals
        ], 201);
    }

    public function show(Devotional $devotional)
    {
        //
        if(empty($devotional)){
            return response()->json([
                'status' => true,
                'message' => 'devotional not found',
                'data' => null
            ], 201);
        }

        return response()->json([
            'status' => true,
            'message' => 'this is the devotional post',
            'data' => $devotional
        ], 201);
    }

    
}
