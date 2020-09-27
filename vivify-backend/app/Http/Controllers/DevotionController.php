<?php

namespace App\Http\Controllers;

use App\Devotion;
use Illuminate\Http\Request;

class DevotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $devotions = Devotion::all();

        return response()->json([
            'status' => true,
            'message' => 'These are all the devotions',
            'data' => $devotions
        ], 200);
    }

    public function show(Devotion $devotion)
    {
        //
        return response()->json([
            'status' => true,
            'message' => 'This is the devotions',
            'data' => $devotion
        ], 200);
    }
}
