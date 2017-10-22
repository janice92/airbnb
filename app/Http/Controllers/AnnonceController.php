<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Annonce;
use Image;
use Storage;


class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::all()->sortByDesc('id');
        return view('annonces.index')->withAnnonces($annonces);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'image'=>'image',
            'body' => 'required',
        ],
            [
                'title.required'=> 'Veuillez donner un titre à votre annonce',
                'body.required' => 'Un descriptif est requis .'

            ]);
            $annonce = new Annonce;
            $annonce->title = $request->title;
            $annonce->body = $request->body;
            $annonce->categorie_id = 1;
            $annonce->user_id = Auth::user()->id;
            if ($request->hasFile('image')){
                $image =  $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('/images/' . $filename);
                Image::make($image)->resize(800, 600)->save($location);
                $annonce->image = $filename;

            }

            $annonce->save();

            Session::flash('success','L\'annonce a été enregistrée avec succès');
            return redirect('/annonces');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annonce = Annonce:: find($id);
        return view('annonces.show')->withAnnonce($annonce);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annonce = Annonce::find($id);
        if(Auth::user()->id != $annonce->user_id){
            abort(404);
        }

        if($annonce == null){
            abort(404);
        }

        return view('annonces.edit')->withAnnonce($annonce);
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
        $annonce = Annonce::find($id);
        if (Auth::user()->id != $annonce->user_id) {
            abort(404);
        }
        if ($annonce == null) {
            abort(404);
        }
        $this->validate($request, [
            'title' => "required|max:255|unique:annonces,title,$id",
            'image' => 'image',
            'body' => 'required'
        ]);
        $annonce->title = $request->title;
        $annonce->body = $request->body;
       // $annonce->categorie_id = $request->categorie;
        $annonce->user_id = Auth::user()->id;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($image)->resize(800, 600)->save($location);
            if ($annonce->image != null) {
                Storage::delete($annonce->image);
            }
            $annonce->image = $filename;
        }
        $annonce->save();

        Session::flash('success', 'L\'annonce a été enregistré avec succès');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annonce = Annonce::find($id);
        if (Auth::user()->id != $annonce->user_id) {
            abort(404);
        }
        if ($annonce == null) {
            abort(404);
        }
        if ($annonce->image != null) {
            Storage::delete($annonce->image);
        }
        $annonce->delete();
        Session::flash('success', 'L\'annonce a été retiré');
        return redirect()->back();
    }
}
