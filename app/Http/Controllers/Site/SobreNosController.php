<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('log.acesso');
    // }

    public function index()
    {
        return view('site.pages.sobre_nos',  ['pageTitle' => 'Sobre nós']);
    }
}
