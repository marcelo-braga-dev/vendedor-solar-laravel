<?php

namespace App\View\Components\Inputs;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $label;
    public $value;
    public $name;
    public $rows;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $value, $rows)
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.textarea');
    }
}
