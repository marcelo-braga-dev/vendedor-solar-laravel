<?php
namespace App\Services\Orcamentos;

use App\Models\Kits;
use App\Services\Orcamentos\CalcDimensionamento;

class PesquisarKitsService extends CalcDimensionamento
{
    private $tensao;

    protected $consumo;
    protected $irradiacao;
    protected $correcao;
    protected $potenciaCalc;

    public function __construct($consumo, $cidade, $tensao)
    {
        $this->consumo = $consumo;
        $this->cidade = $cidade;
        $this->tensao = $tensao;
    }

    public function convencional()
    {
        $this->calcConvencional();
        $kitsEncontrados = $this->pesquisarKits();
        $kits = $this->preencheKits($kitsEncontrados);
        
        return $kits;
    }

    public function pesquisarKits()
    {
        return $this->getKits($this->potenciaCalc);
    }

    private function getKits($potenciaCalc)
    {
        $variacaoPot = 800;

        $minPot = $potenciaCalc * (1 - ($variacaoPot / 100));
        $maxPot = $potenciaCalc * (1 + ($variacaoPot / 100));

        $kits = Kits::query()
            //->where('estrutura', '=', $request->estrutura)
            ->where('potencia', '>=', $minPot)
            ->where('potencia', '<=', $maxPot)
            ->orderBy('preco_cliente', 'ASC')
            ->get(['id', 'marca_inversor', 'marca_painel', 'painel', 'modelo', 'preco_cliente', 'tensao', 'potencia']);

        return $kits;
    }

    private function preencheKits($kits)
    {
        foreach ($kits as $item) {

            $item = $this->analizaTrafo($item);

            $item->geracao = $this->gerecaoConvencional($item->potencia);

            $res[$item->marca_inversor][$item->marca_painel]['\'' . $item->potencia . '\'']['inversor'] = $item->marca_inversor;
            $res[$item->marca_inversor][$item->marca_painel]['\'' . $item->potencia . '\'']['painel'] = $item->marca_painel;
            $res[$item->marca_inversor][$item->marca_painel]['\'' . $item->potencia . '\'']['potencia'] = $item->potencia;
            $res[$item->marca_inversor][$item->marca_painel]['\'' . $item->potencia . '\'']['geracao'] = $item->geracao;
            $res[$item->marca_inversor][$item->marca_painel]['\'' . $item->potencia . '\'']['kits'][] = [
                'id' => $item->id,
                'modelo' => $item->modelo,
                'potencia' => $item->potencia,
                'geracao' => $item->geracao,
                'preco' => number_format($item->preco_cliente, 2, ',', '.'),
                'trafo' => $item->trafo
            ];
        }

        foreach ($res as $a) {
            foreach ($a as $b) {
                foreach ($b as $c) {
                    $resposta[] = $c;
                }
            }
        }

        return $resposta;
    }

    private function analizaTrafo($item)
    {
        if ($item->tensao > $this->tensao) {
            $trafo = $this->getTrafo($item);

            $item->trafo += $trafo->id;
            $item->preco_cliente += $trafo->preco_cliente;
        }

        return $item;
    }

    private function getTrafo($item)
    {
        return (object) ['preco_cliente' => 1000000, 'id' => 6];
    }
}
