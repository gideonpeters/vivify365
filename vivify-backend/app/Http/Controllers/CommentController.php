<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Blog;
use Illuminate\Http\Request;

class CommentController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
        $blog = Blog::find($request->blog_id);

        if(empty($blog)){
            return response()->json([
                'status' => true,
                'message' => 'blog does not exist',
                'data' => null
            ], 201);
        }

        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->body = $request->body;
        $comment->blog_id = $blog->id;
        $comment->save();

        return response()->json([
            'status' => true,
            'message' => 'comment created successfully',
            'data' => $comment
        ], 201);
    }

    public function show(Comment $comment)
    {
        //
    }

    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
