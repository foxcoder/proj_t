<?php

namespace App\Http\Controllers\Pages;

use App\AIProjectEO;
use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
   /*
    const  action_create=0;
    const  action_modify=1;
    const  action_delete=2;

    const  state_none=0;
    const  state_in_design=1;
    const  state_in_coding=2;
    const  state_in_testing=3
    const  state_blocked=4;
    const  state_released=5;5
 */



    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getProjects()
    {
        $proj_list=AIProjectEO::all();

       dd($proj_list);

        //if we have list in
       // return view('pages/proj_list');
        return view('pages/proj_list', compact('proj_list'));
    }


     public  function phpinfo(){
         dd(phpinfo());
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function storeProject(Request $request)
    {
        $m_id=$request->input('proj_id');
        $m_name=$request->input('proj_name');
        $m_desc=$request->input('proj_desc');
        $m_start_date=$request->input('start_date');
        $m_due_date=$request->input('due_date');
        $m_type=$request->input('proj_type');

        $login_user_id= Auth::id();



        return redirect()->action('ProjectController@getProjects');
    }


    public function  editProject(Request $request){
        $isNewProj=false;
        $proj_id=$request->input('proj_id');

        if(empty($request->input('proj_id'))) {
            $isNewProj=true;
        }

        if($isNewProj) {
            return view('pages/proj_create_form');
        }else {
            $project= AIProjectEO::findOrNew($proj_id);
            return view('pages/proj_create_form')->with(compact('project'));
        }


    }




    public function projecTimeline()
    {
        return view('pages/proj_timeline');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

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
