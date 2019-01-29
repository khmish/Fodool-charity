<?php

namespace App\Http\Controllers;

use App\comment;
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
        $comm=Comment::all();
        return $comm;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $comm=new Comment;
        $comm->blog_id=$request->blog_id;
        $comm->body=$request->body;
        $comm->user_id=$request->user_id;
        $comm->state=$request->state;
        $comm->save();
        return $comm;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(comment $comment)
    {
        //
        $comm=Comment::find($comment->id);
        return $comm;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $comm=Comment::find($request->id);
        $comm->blog_id=$request->blog_id;
        $comm->body=$request->body;
        $comm->user_id=$request->user_id;
        $comm->state=$request->state;
        $comm->save();
        return $comm;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        //
        $comm=Comment::find($comment->id);
        $comm->state=2;
        return $comm;
    }
}
