<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AddCategory(Request $request)
    {
        $request->validate(
            ['nom' =>'required',
            'description'=>'required']
        );
        $c = new Category();
        $c->name = $request->nom;
        $c->description = $request->description;
        if ($c->save()) {
            return redirect('/category/list');
        } else {
            return 'err404 dajout';
        }
    }

    //afficher la liste
    public function list()
    {
        //recuperer les categories de la BD
        $categories = Category::all();
        

        return view('liste')->with('categories', $categories);
    }

    public function delete($id)
    {
        $categorie= Category::find($id);
        if ($categorie->delete()) {
            return redirect('/category/list')->with('msg', 'votre categorie supprimer avec succes');
        } else {
            return 'err404 dajout';
        }
    }
    // permet d'afficher la page html form.blade.html
    public function ShowFromCategory()
    {
        return view('form');
    }
}
