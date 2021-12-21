<?php

namespace App\Http\Controllers\Vendedor\Orcamentos;

use App\Http\Controllers\Controller;
use App\Models\Clientes;
use App\Services\Orcamentos\DimenConvencionalService;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    public function convencional()
    {
        $cidades = get_cidades();
        $estados = get_estados();

        $clientes = $this->getClientes();

        return view('pages.vendedor.orcamentos.gerar.convencional', compact('clientes', 'cidades', 'estados'));
    }

    public function demanda()
    {
        $cidades = get_cidades();
        $estados = get_estados();

        $clientes = $this->getClientes();

        return view('pages.vendedor.orcamentos.gerar.demanda', compact('clientes', 'cidades', 'estados'));
    }

    public function calcConvencional(Request $request)
    {
        $clsDimen = new DimenConvencionalService($request);

        return $clsDimen->getkits();
    }

    private function getClientes()
    {
        return Clientes::orderBy('id', 'DESC')
            ->where('users_id', '=', id_usuario_atual())
            ->get();
    }
}
