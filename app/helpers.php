<?php 
if (!function_exists('get_status')) {
    function get_status($id = '') {
        if ($id == 0) return 'Desativado';
        if ($id == 1) return 'Ativo';

        return 'Inválido';
    }
}