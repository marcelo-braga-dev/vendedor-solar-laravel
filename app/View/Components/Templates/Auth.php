<?php

namespace App\View\Components\Templates;

use Illuminate\View\Component;

class Auth extends Component
{
    public $tipoUsuario;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tipoUsuario)
    {
        $this->tipoUsuario = $tipoUsuario;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {   
        if ($this->tipoUsuario == 'admin') return view('components.templates.admin');
        if ($this->tipoUsuario == 'vendedor') return view('components.templates.vendedor');
        
        return view('components.templates.auth');
    }
}
