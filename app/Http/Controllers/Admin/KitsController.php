<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kits;
use Illuminate\Http\Request;

class KitsController extends Controller
{
    public function index()
    {
        $clsKits = new Kits();

        $kits = $clsKits->get();

        return view('pages.admin.produtos.kits.tabela', compact('kits'));
    }
}
