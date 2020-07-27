<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::withCount('comments')->paginate(2);
        return response()->json([
            'status' => true,
            'message' => 'these are all the blog posts',
            'data' => $blogs
        ], 201);
    }

    public function show(Blog $blog)
    {
        //
        // if(!empty($blog)){
        //     return response()->json([
        //         'status' => true,
        //         'message' => 'blog post not found',
        //         'data' => []
        //     ], 201);
        // }
        $blog->load('comments');
        return response()->json([
            'status' => true,
            'message' => 'this is the blog post',
            'data' => $blog->loadCount('comments')
        ], 201);
    }

}
