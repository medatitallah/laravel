<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function afficherpage1()
    {
        return view('page1');
    }

    //function qui permet d'afficher la page 1
    public function afficherpage2()
    {
        return view('page2');
    }

    public function donnees()
    {
        $name = 'Omar';
        $age = '20';
        $names = ['ahmed', 'omar', 'med'];

        return view('donnees.index')->with('name', $name)->with('age', $age)->with('names', $names);
    }
}
