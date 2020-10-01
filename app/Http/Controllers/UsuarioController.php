<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        //metodo inicial
        return view('usuario.index');
    }

    public function create(){
        // metodo mostrar un elemento
        return view('usuario.create');

    }

    public function ver(){
        // metodo mostrar algo especifico
        return view('usuario.ver');


    }

    public function formulario(){
        // metodo mostrar algo especifico
        return view('usuario.formulario');


    }
    public function permiso(){
        // metodo mostrar algo especifico
        return view('usuario.permiso');
        }

    public function vacaciones(){
            // metodo mostrar algo especifico
            return view('usuario.vacaciones');
            }

    public function comisiones(){
            // metodo mostrar algo especifico
            return view('usuario.comisiones');
            }

    public function boleta(){
             // metodo mostrar algo especifico
             return view('usuario.boleta');
            }
    public function trabajo(){
            // metodo mostrar algo especifico
            return view('usuario.trabajo');
            }
    public function medico(){
            // metodo mostrar algo especifico
            return view('usuario.medico');
            }
}
