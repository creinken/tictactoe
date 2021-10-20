<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Move;

class MoveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return $game.moves();
        return $request;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $move = Move::create($request->all());
        return response()->json($move, 200);
    }
}
