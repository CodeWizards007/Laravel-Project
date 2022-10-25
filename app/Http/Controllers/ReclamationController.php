<?php

namespace App\Http\Controllers;
use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reclamations=Reclamation::all();
        return view('reclamations.index')->with('reclamations',$reclamations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reclamations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input= $request->all();
        Reclamation::create($input);
        return redirect('reclamation')->with('flash_message', 'Reclamation Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reclamation = Reclamation::find($id);
        return view('reclamations.show')->with('reclamations', $reclamation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reclamation = Reclamation::find($id);
        return view('reclamations.edit')->with('reclamations', $reclamation);
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
        $reclamation = Reclamation::find($id);
        $input = $request->all();
        $reclamation->update($input);
        return redirect('reclamation')->with('flash_message', 'reclamation Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reclamation::destroy($id);
        return redirect('reclamation')->with('flash_message', 'Reclamation deleted!');
    }

}
