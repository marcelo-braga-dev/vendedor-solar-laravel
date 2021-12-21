<?php

namespace App\Services\Orcamentos;

use App\Services\Orcamentos\PesquisarKitsService as OrcamentosPesquisarKitsService;

class DimenConvencionalService
{
    function __construct($request)
    {
        $this->consumo = $request->consumo;
        $this->cidade = $request->cidade;
        $this->tensao = $request->tensao;
    }

    public function getKits()
    {
        // ENTRADA

        $clsPerquisar = new OrcamentosPesquisarKitsService($this->consumo, $this->cidade, $this->tensao);

        return $clsPerquisar->convencional();
    }
}
