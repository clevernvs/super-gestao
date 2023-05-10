<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContatoStoreRequest;
use App\Models\MotivoContato;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function __construct(protected SiteContato $contato, protected MotivoContato $motivoContato)
    {
        $this->contato = $contato;
        $this->motivoContato = $motivoContato;
    }

    public function index()
    {
        $motivosDoContato = $this->motivoContato->all();

        return view('site.pages.contato', ['pageTitle' => 'Contato', 'motivosDoContato' => $motivosDoContato]);
    }

    public function store(ContatoStoreRequest $request)
    {
        // dd($request->all());

        $this->contato->create($request->all());

        return redirect()->route('site.index');

        // $contato = new SiteContato();
        // $contato->fill($request->all());

        // return view('site.pages.contato', ['pageTitle' => 'Contato']);
    }
}
