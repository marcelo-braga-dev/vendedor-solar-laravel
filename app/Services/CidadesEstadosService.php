<?php
namespace App\Services;

use App\Models\CidadesEstados;

class CidadesEstadosService
{
    static function getCidades()
    {
        $cidades = [];

        $cidadesEstados = CidadesEstados::orderBy('sigla', 'ASC')
            ->orderBy('cidade', 'ASC')
            ->get();

        foreach ($cidadesEstados as $item) {
            $cidades[$item->sigla][] = $item->toArray();
        }

        return $cidades;
    }

    static function getEstados()
    {
        return CidadesEstados::orderBy('sigla', 'ASC')
            ->distinct()
            ->get(['sigla', 'estado']);
    }
}
