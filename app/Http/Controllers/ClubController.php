<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Club;
class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs=Club::all();
        return view('clubs.index')->with('clubs',$clubs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nomClub'     => 'required|min:5',
            'specialite'   => 'required|min:3',

        ]);
        $input= $request->all();
        Club::create($input);
        return redirect('club')->with('flash_message', 'Club Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $club = Club::find($id);
        return view('clubs.show')->with('clubs', $club);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $club = Club::find($id);
        return view('clubs.edit')->with('clubs', $club);
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
        $this->validate($request, [
            'nomClub'     => 'required|min:5',
            'specialite'   => 'required|min:3',

        ]);
        $club = Club::find($id);
        $input = $request->all();
        $club->update($input);
        return redirect('club')->with('flash_message', 'club Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Club::destroy($id);
        return redirect('club')->with('flash_message', 'Club deleted!');
    }

}
