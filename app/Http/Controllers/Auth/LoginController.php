<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(protected User $user)
    {
        $this->user = $user;
    }

    public function index(Request $request)
    {
        $error = '';

        if ($request->get('error') == 1) {
            $error = 'E-mail ou senha inexistente.';
        }

        if ($request->get('error') == 2) {
            $error = 'É necessário fazer login para ter acesso a página.';
        }

        return view('site.pages.login', ['pageTitle' => 'Login', 'error' => $error]);
    }

    public function autenticar(LoginRequest $request)
    {
        $email = $request->get('usuario');
        $password = $request->get('senha');

        $usuario = $this->user->getUser($email, $password);

        if (!isset($usuario->name)) {
            return redirect()->route('site.login', ['error' => 1]);
        }

        session_start();

        $_SESSION['nome'] = $usuario->name;
        $_SESSION['email'] = $usuario->email;

        return redirect()->route('adm.cliente');
    }

    public function sair()
    {
        session_destroy();

        return redirect()->route('site.index');
    }
}
