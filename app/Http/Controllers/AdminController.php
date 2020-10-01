<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        //metodo inicial
        return view('admin.index');
    }

    public function create(){
        // metodo mostrar un elemento
        return view('admin.create');

    }

    public function show(){
        // metodo mostrar algo especifico
        return view('admin.show');


    }
}
