<?php

namespace App\Http\Controllers;

use App\subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subj=Subject::all();
        return $subj;
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
        $subj=new Subject;
        $subj->tile=$request->tile;
        $subj->description=$request->description;
        $subj->picture=$request->picture;
        $subj->body=$request->body;
        $subj->count_view=$request->count_view;
        $subj->blog_id=$request->blog_id;
        $subj->user_id=$request->user_id;
        $subj->is_published=$request->is_published;
        $subj->published_date=$request->published_date;
        $subj->state=$request->state;
        $subj->save();
        return $subj;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(subject $subject)
    {
        //
        $subj=Subject::find($subject->id);
        return $subj;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $subj=Subject::find($request->id);
        $subj->tile=$request->tile;
        $subj->description=$request->description;
        $subj->picture=$request->picture;
        $subj->body=$request->body;
        $subj->count_view=$request->count_view;
        $subj->blog_id=$request->blog_id;
        $subj->user_id=$request->user_id;
        $subj->is_published=$request->is_published;
        $subj->published_date=$request->published_date;
        $subj->state=$request->state;
        $subj->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(subject $subject)
    {
        //

        $subj=Subject::find($subject->id);
        $subj->state=2;
        return $subj;
    }
}
