<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index(Request $request)
    {
        $frutas = ['Mango','Jocote','Manzana','Mandarina','Uvas'];

        return view('profesor.index')->with('id',$request->id)->with('frutas',$frutas);
    }
    public function save()
    {
        return view('profesor.save');
    }
    public function delete()
    {
        return view('profesor.delete');
    }
    public function editar()
    {
        return view('profesor.editar');
    }
}
