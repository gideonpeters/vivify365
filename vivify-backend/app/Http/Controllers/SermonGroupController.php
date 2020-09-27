<?php

namespace App\Http\Controllers;

use App\SermonGroup;
use Illuminate\Http\Request;

class SermonGroupController extends Controller
{
    public function index()
    {
        //
        $sermon_groups = SermonGroup::all();

        return response()->json([
            'status' => true,
            'message' => 'These are all the sermon series',
            'data' => $sermon_groups
        ], 200);
    }

    public function show(SermonGroup $sermon_group)
    {
        //
        return response()->json([
            'status' => true,
            'message' => 'This is the sermon series',
            'data' => $sermon_group
        ], 200);
    }
}
