<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class InputBoxRight extends Component
{
    public $label;
    public $type;
    public $box;
    public $value;
    public $name;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $type, $box, $name, $value)
    {
        $this->label = $label;
        $this->type = $type;
        $this->box = $box;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.input-box-right');
    }
}
