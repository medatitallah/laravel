<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AddCategory(Request $request)
    {

        $c = new Category();
        $c->name = $request->nom;
        $c->description = $request->description;
        if ($c->save()) {
            return 'ajouter avec succes';
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
