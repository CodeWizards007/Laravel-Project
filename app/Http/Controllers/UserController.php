<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Classe;
use App\Models\Club;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users = User::all();
         return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classe = Classe::all();
        $club = Club::all();
        return view('users.create')->with('classes', $classe)->with('clubs', $club);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            //'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nom'     => 'required|min:5',
            'prenom'   => 'required|min:5',
            'email'   => 'required',
            'telephone'   => 'required|min:8',
            'adresse'   => 'min:4',
            'classe_id'   => 'required|min:1',
            'club_id'   => 'required|min:1',
            'role' => 'required|min:1',
            'password' => 'required|min:8',
        ]);
        User::create($request->all());

        return redirect("user")->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $classe = Classe::find($user->classe_id);
        $club = Club::find($user->club_id);
        return view('users.show')->with('user', $user)->with('classe', $classe)->with('club', $club);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $user_classe = Classe::find($user->classe_id);
        $user_club = Club::find($user->club_id);
        $classes = Classe::all();
        $clubs = Club::all();
        return view('users.edit')
            ->with('user', $user)
            ->with('user_classe', $user_classe)
            ->with('user_club', $user_club)
            ->with('classes', $classes)
            ->with('clubs', $clubs);
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
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('user')->with('flash_message', 'user Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('user')->with('flash_message', 'user deleted!');
    }
}
