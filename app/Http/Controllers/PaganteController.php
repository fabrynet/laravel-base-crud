<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagante;

class PaganteController extends Controller
{
    public function index() {
      $paganti = Pagante::all();
      return view('paganti',compact('paganti'));
    }
}
