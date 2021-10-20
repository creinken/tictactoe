<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Move;
use \App\Models\Game;

class MoveController extends Controller
{
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
