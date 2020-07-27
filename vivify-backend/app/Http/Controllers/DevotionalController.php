<?php

namespace App\Http\Controllers;

use App\Devotional;
use Illuminate\Http\Request;

class DevotionalController extends Controller
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

    public function show(Devotional $devotional)
    {
        //
        if(empty($devotional)){
            return response()->json([
                'status' => true,
                'message' => 'devotional not found',
                'data' => $devotional
            ], 201);
        }

        return response()->json([
            'status' => true,
            'message' => 'this is the devotional post',
            'data' => $devotional
        ], 201);
    }

    
}
