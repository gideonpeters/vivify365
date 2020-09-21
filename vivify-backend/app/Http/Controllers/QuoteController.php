<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quotes = Quote::take(3)->get();

        return response()->json([
            'status' => true,
            'message' => 'these are all the quotes',
            'data' => $quotes,
        ], 200);
    }


    public function show(Quote $quote)
    {
        //
    }
}
