<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public static function get(){
        return view('site.home');
    }
    public static function cursos(){
        return view('site.cursos');
    }
    public static function departamentos(){
        return view('site.departamentos');
    }
    public static function contato(){
        return view('site.contato');
    }

//======================================================

    public static function adm(){
        return view('site.cursos.adm');
    }
    public static function cont(){
        return view('site.cursos.cont');
    }
    public static function ds(){
        return view('site.cursos.ds');
    }
    public static function fin(){
        return view('site.cursos.fin');
    }
    public static function log(){
        return view('site.cursos.log');
    }
    public static function rh(){
        return view('site.cursos.rh');
    }
    public static function sj(){
        return view('site.cursos.sj');
    }

//======================================================

    public static function sa(){
        return view('site.departamentos.sa');
    }
    public static function dir(){
        return view('site.departamentos.dir');
    }
    public static function cp(){
        return view('site.departamentos.cp');
    }
    public static function cc(){
        return view('site.departamentos.cc');
    }
    public static function apm(){
        return view('site.departamentos.apm');
    }
}

