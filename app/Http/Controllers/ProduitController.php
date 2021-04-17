<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits=Produit::all();
        return view('produit',['produits'=>$produits,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produits=Produit::all();

        return view('produit',['produits'=>$produits,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nomImage=null;
        if (request()->has('image')){
            $images=request()->file('image');
            $nomImage=time().'.'.$images->getClientOriginalExtension();
            $chemin=public_path('/images');
            $images->move($chemin,$nomImage);
        }
        $cpt=Produit::all()->count();
        $produit=new Produit();
        $produit->codeProd="P000".($cpt+1);
        $produit->designation=$request->input('designation');
        $produit->description=$request->input('description');
        $produit->etat=1;
        $produit->prix=$request->input('prix');
        $produit->image=$nomImage;

        $produit->save();
        return redirect('/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $produits=Produit::all();
        return view('welcome',['produits'=>$produits]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit=Produit::find($id);
        $produits=Produit::all();
        return view('produit',['produits'=>$produits,'produit'=>$produit,'layout'=>'edit']);
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
        $nomImage=null;

        $produit=Produit::find($id);
        if (request()->has('image')){
            $images=request()->file('image');
            $nomImage=time().'.'.$images->getClientOriginalExtension();
            $chemin=public_path('/images');
            $images->move($chemin,$nomImage);
            $produit->image=$nomImage;
        }

        $produit->codeProd=$request->input('codeProd');
        $produit->designation=$request->input('designation');
        $produit->description=$request->input('description');
        $produit->etat=$request->input('etat');
        $produit->prix=$request->input('prix');

        $produit->save();
        return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit=Produit::find($id);
        $produit->delete();
        return redirect('/');
    }
}
