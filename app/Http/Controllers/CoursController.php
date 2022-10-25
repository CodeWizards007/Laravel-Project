<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use App\Models\User;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cours = Cour::all();
        return view('cours.index')->with('cours', $cours);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('cours.create')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cour::create($request->all());
        return redirect("cour")->with('success','cour created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cour = Cour::find($id);
        $user = User::find($cour->user_id);
        return view('cours.show')
            ->with('cour', $cour)
            ->with('course_user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cour = Cour::find($id);
        $user = User::find($cour->user_id);
        $users = User::all();
        return view('cours.edit')
            ->with('cour', $cour)
            ->with('users', $users)
            ->with('course_user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cour = Cour::find($id);
        $input = $request->all();
        $cour->update($input);
        return redirect('cour')->with('flash_message', 'cour Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cour::destroy($id);
        return redirect('cour')->with('flash_message', 'cour Deleted!');
    }
}
