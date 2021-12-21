<?php

namespace App\Services\Orcamentos;

use App\Models\IrradiacaoSolar;

class CalcDimensionamento
{
    protected function calcConvencional()
    {
        $this->irradiacao();
        $this->correcao();

        $resultado = (($this->consumo / 30) / ($this->irradiacao)) * $this->correcao;

        $this->potenciaCalc = round($resultado, 3);
    }

    protected function gerecaoConvencional($potencia)
    {
        $geracao = $potencia * $this->irradiacao * 30 / $this->correcao;

        return round($geracao, 3);
    }

    private function irradiacao()
    {
        $this->irradiacao = IrradiacaoSolar::find($this->cidade, 'media')->media;
    }

    private function correcao()
    {
        $this->correcao = 1;
    }
}
