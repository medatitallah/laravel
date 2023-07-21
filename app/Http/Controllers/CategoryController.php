<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function AddCategory()
    {

        $c = new Category();
        $c->name = 'Sport';
        $c->description = 'description sport';
        $c->save();

        return 'ajouter avec succes';
    }
}
