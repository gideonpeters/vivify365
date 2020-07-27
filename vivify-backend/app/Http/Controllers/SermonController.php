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
        $sermons = Sermon::paginate(2);
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

    
}
