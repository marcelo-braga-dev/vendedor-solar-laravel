<?php

use App\Services\CidadesEstadosService;
use App\Services\EstruturasService;

if (!function_exists('get_status')) {
    function get_status($id = '')
    {
        if ($id == 0) return 'Desativado';
        if ($id == 1) return 'Ativo';

        return 'Inválido';
    }
}

if (!function_exists('get_estrutura')) {
    function get_estrutura($id = '')
    {
        $clsEstruturasService = new EstruturasService();

        $estrutura = $clsEstruturasService->get_estrutura($id);

        if (!empty($estrutura->nome)) return $estrutura->nome;

        return 'Inválido';
    }
}

if (!function_exists('get_estruturas')) {
    function get_estruturas()
    {
        $clsEstruturasService = new EstruturasService();

        return $clsEstruturasService->get_estruturas();
    }
}

if (!function_exists('print_pre')) {
    function print_pre($arg)
    {
        echo '<pre>';
        print_r($arg);
        echo '</pre>';
        exit();
    }
}

if (!function_exists('convert_money_float')) {
    function convert_money_float($arg)
    {
        if (is_string($arg)) {
            $arg = str_replace('.', '', $arg);
            $arg = str_replace(',', '.', $arg);
        }
        return $arg;
    }
}

if (!function_exists('convert_float_money')) {
    function convert_float_money($arg)
    {
        if (is_numeric($arg)) {
            $arg = number_format($arg, 2, ',', '.');
        }
        return $arg;
    }
}

if (!function_exists('id_usuario_atual')) {
    function id_usuario_atual()
    {        
        return auth()->user()->id;
    }
}

if (!function_exists('get_cidades')) {
    function get_cidades()
    {        
        return CidadesEstadosService::getCidades();
    }
}

if (!function_exists('get_estados')) {
    function get_estados()
    {        
        return CidadesEstadosService::getEstados();
    }
}
