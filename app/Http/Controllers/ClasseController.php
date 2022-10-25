<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etablissement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClasseController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get classes
        $classes = Classe::latest()->paginate(5);

        //render view with posts
        return view('classes.index', compact('classes'));
    }
     /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $classes = Etablissement::find($id)->classe;
            return view('classes.index', compact('classes'));
        }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
    $etabs = Etablissement::all();
        return view('classes.create',compact('etabs'));
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nomClasse'     => 'required|min:4',
            'nombreEtudiants'   => 'required|min:1',

        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/classes', $image->hashName());

        //create post
        Classe::create([
            'image'     => $image->hashName(),
            'nomClasse'     => $request->nomClasse,
            'nombreEtudiants'   => $request->nombreEtudiants,
            'etablissement_id'   => $request->etablissement_id,

        ]);

        //redirect to index
        return redirect()->route('classes.index')->with(['success' => 'Created!']);
    }

    /**
     * edit
     *
     * @param  mixed $classe
     * @return void
     */
    public function edit(Classe $classe)
    {
        return view('classes.edit', compact('classe'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $classe
     * @return void
     */
    public function update(Request $request, Classe $classe)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nomClasses'     => 'required|min:2',
            'nombreEtudiants'   => $request->nombreEtudiants,
                        'etablissement_id'   => $request->etablissement_id,
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/classes', $image->hashName());

            //delete old image
            Storage::delete('public/classes/'.$classe->image);

            //update post with new image
            $classe->update([
                'image'     => $image->hashName(),
                            'nomClasse'     => $request->nomClasse,
                            'nombreEtudiants'   => $request->nombreEtudiants,
                            'etablissement_id'   => $request->etablissement_id,
            ]);

        } else {

            //update post without image
            $classe->update([
                'image'     => $image->hashName(),
                            'nomClasse'     => $request->nomClasse,
                            'nombreEtudiants'   => $request->nombreEtudiants,
                            'etablissement_id'   => $request->etablissement_id,
            ]);
        }

        //redirect to index
        return redirect()->route('classes.index')->with(['success' => 'Modifier Avec Success!']);
    }

    /**
     * destroy
     *
     * @param  mixed $classe
     * @return void
     */
    public function destroy(Classe $classe)
    {
        //delete image
        Storage::delete('public/posts/'. $classe->image);

        //delete post
        $classe->delete();

        //redirect to index
        return redirect()->route('classes.index')->with(['success' => 'Effacer!']);
    }
}
