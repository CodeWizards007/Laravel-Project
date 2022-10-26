<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use App\Models\User;
use PDF;


class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements = Evenement::all();
        return view ('evenements.index')->with('evenements', $evenements);
    }

    public function createPDF() {
        // retreive all records from db
        $data = Evenement::all();
        // share data to view
        view()->share('evenements',$data);
        $pdf = PDF::loadView('evenements.pdfff', $data->toArray());
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('evenements.create')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Evenement::create($input);
        return redirect('evenements')->with('flash_message', 'evenement Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evenement = Evenement::find($id);
        $user = User::find($evenement->user_id);    
        return view('evenements.show')->with('evenements', $evenement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evenement = evenement::find($id);
        return view('evenements.edit')->with('evenements', $evenement);
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
        $evenement = Evenement::find($id);
        $input = $request->all();
        $evenement->update($input);
        return redirect('evenements')->with('flash_message', 'evenement Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Evenement::destroy($id);
        return redirect('evenements')->with('flash_message', 'evenement deleted!');
    }
}