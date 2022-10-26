<?php


namespace App\Http\Controllers;

use App\Models\Etablissement;
use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EtablissementController extends Controller
{
    /**
     * index
     *
     * @return void
     */

     public function index(Request $request)
         {

         $search = $request->input('search');

             // Search in the title and body columns from the posts table
             $etablissements = Etablissement::query()
                 ->where('nom', 'LIKE', "%{$search}%")
                 ->orWhere('telephone', 'LIKE', "%{$search}%")
                 ->orWhere('email', 'LIKE', "%{$search}%")
                 ->orWhere('address', 'LIKE', "%{$search}%")
                 ->orWhere('nombreClasses', 'LIKE', "%{$search}%")
                 ->orWhere('capaciteEtudiants', 'LIKE', "%{$search}%")
                 ->orWhere('nombreEnseignants', 'LIKE', "%{$search}%")
                 ->get();
$classes=Classe::All();
             // Return the search view with the resluts compacted
             return view('etablissements.index', compact('etablissements'))->with('classes',$classes);

         }
  /*   public function index()
    {
        //get etablissements
        $etablissements = Etablissement::latest()->paginate(5);

        $classes=Classe::All();

        //render view with posts
        return view('etablissements.index', compact('etablissements'))->with('classes',$classes);
    } */

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('etablissements.create');
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
            'nom'     => 'required|min:5',
            'telephone'   => 'required|min:8',
            'email'   => 'required|min:4',
            'address'   => 'required|min:10',
            'nombreClasses'   => 'required|min:1',
            'capaciteEtudiants'   => 'required|min:1',
            'nombreEnseignants'   => 'required|min:1',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/etablissements', $image->hashName());

        //create post
        Etablissement::create([
            'image'     => $image->hashName(),
            'nom'     => $request->nom,
            'telephone'   => $request->telephone,
            'email'   => $request->email,
            'address'   => $request->address,
            'nombreClasses'   => $request->nombreClasses,
            'capaciteEtudiants'   => $request->capaciteEtudiants,
            'nombreEnseignants'   => $request->nombreEnseignants,
        ]);

        //redirect to index
        return redirect()->route('etablissements.index')->with(['success' => 'Created!']);
    }

    /**
     * edit
     *
     * @param  mixed $etablissement
     * @return void
     */
    public function edit(Etablissement $etablissement)
    {
        return view('etablissements.edit', compact('etablissement'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $etablissement
     * @return void
     */
    public function update(Request $request, Etablissement $etablissement)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nom'     => 'required|min:2',
            'telephone'   => 'required|min:8',
            'email'   => 'required|min:4',
            'address'   => 'required|min:6',
            'nombreClasses'   => 'required|min:1',
            'capaciteEtudiants'   => 'required|min:1',
            'nombreEnseignants'   => 'required|min:1',
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/etablissements', $image->hashName());

            //delete old image
            Storage::delete('public/etablissements/'.$etablissement->image);

            //update post with new image
            $etablissement->update([
                'image'     => $image->hashName(),
                'nom'     => $request->nom,
                'telephone'   => $request->telephone,
                'email'   => $request->email,
                'address'   => $request->address,
                'nombreClasses'   => $request->nombreClasses,
                'capaciteEtudiants'   => $request->capaciteEtudiants,
                'nombreEnseignants'   => $request->capaciteEtudiants,
            ]);

        } else {

            //update post without image
            $etablissement->update([
                'image'     => $image->hashName(),
                'nom'     => $request->nom,
                'telephone'   => $request->telephone,
                'email'   => $request->email,
                'address'   => $request->address,
                'nombreClasses'   => $request->nombreClasses,
                'capaciteEtudiants'   => $request->capaciteEtudiants,
                'nombreEnseignants'   => $request->nombreEnseignants,
            ]);
        }

        //redirect to index
        return redirect()->route('etablissements.index')->with(['success' => 'Modifier Avec Success!']);
    }

    /**
     * destroy
     *
     * @param  mixed $etablissement
     * @return void
     */
    public function destroy(Etablissement $etablissement)
    {
        //delete image
        Storage::delete('public/posts/'. $etablissement->image);

        //delete post
        $etablissement->delete();

        //redirect to index
        return redirect()->route('etablissements.index')->with(['success' => 'Effacer!']);
    }
}
