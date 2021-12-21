<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormCadastroKitRequest;
use App\Models\Estruturas;
use App\Models\Fornecedores;
use App\Models\Kits;
use App\Models\Paineis;
use App\Models\Produtos;
use Illuminate\Http\Request;

class KitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clsKits = new Kits();

        $kits = $clsKits->orderby('id', 'DESC')->get();

        return view('pages.admin.produtos.kits.index', compact('kits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paineis = [];

        $estruturas = Estruturas::orderBy('nome', 'ASC')->get();
        $fornecedores = Fornecedores::orderBy('nome', 'ASC')->get(['id', 'nome']);
        $produtos = Produtos::orderBy('nome', 'ASC')->get(['id', 'tipo', 'nome', 'categoria']);

        $listPaineis = Paineis::orderBy('potencia', 'ASC')->get(['id', 'potencia', 'produtos_id']);
        
        foreach ($listPaineis as $arg) {
            $paineis[$arg->produtos_id][] = $arg->toArray();
        }

        foreach ($produtos as $arg) {
            $marcas[$arg->id] = $arg->nome;
        }        

        return view(
            'pages.admin.produtos.kits.create',
            compact('estruturas', 'fornecedores', 'produtos', 'paineis', 'marcas')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormCadastroKitRequest $request)
    {
        $clsKits = new Kits();

        $clsKits->modelo = $request->modelo;
        $clsKits->inversor = $request->inversor;
        $clsKits->painel = $request->potencia_painel;
        $clsKits->potencia = $request->potencia;
        $clsKits->fornecedor = $request->fornecedor;
        $clsKits->preco_fornecedor = convert_money_float($request->preco_fornecedor);
        $clsKits->estrutura = $request->estrutura;
        $clsKits->tensao = $request->tensao;
        $clsKits->produtos = $request->produtos;
        $clsKits->observacoes = $request->observacoes;

        $clsKits->push();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
