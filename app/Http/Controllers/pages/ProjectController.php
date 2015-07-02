<?php

namespace App\Http\Controllers\Pages;

use App\AIProjectEO;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function listAll()
    {
        //$proj_list=AIProjectEO::all();
        $test='';
        //if we have list in
        return view('pages/proj_list');
       // return view('pages/projects', compact('proj_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function openProjectFrom()
    {
        return view('pages/proj_create_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
