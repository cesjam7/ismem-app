<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NoticiasController extends Controller
{
  function listado() {
    $noticias = DB::table('noticias')->get();
    return view('noticias.listado', compact('noticias'));
  }

  function registrar() {
    return view('noticias.registrar');
  }
}
