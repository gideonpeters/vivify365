<?php

namespace App\Http\Controllers;

use App\Sermon;
use App\SermonGroup;
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
        if (empty($sermon)) {
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

        if (empty($featured)) {
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

    public function indexByCategory(Request $request, $sermon_group_id)
    {
        $sermon_group = SermonGroup::find($sermon_group_id);

        if (empty($sermon_group)) {
            return response()->json([
                'status' => true,
                'message' => 'sermon group not found',
                'data' => null
            ], 201);
        }
        $sermons = Sermon::where('sermon_group_id', '=', $sermon_group_id)->paginate(6);

        return response()->json([
            'status' => true,
            'message' => 'these are the sermons',
            'data' => $sermons
        ], 201);
    }
}
