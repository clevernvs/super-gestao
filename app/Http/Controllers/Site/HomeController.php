<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\MotivoContato;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(protected MotivoContato $motivoContato)
    {
        $this->motivoContato = $motivoContato;
    }

    public function index()
    {
        $motivosDoContato = $this->motivoContato->all();

        return view('site.pages.home', ['pageTitle' => 'Home', 'motivosDoContato' => $motivosDoContato]);
    }
}
