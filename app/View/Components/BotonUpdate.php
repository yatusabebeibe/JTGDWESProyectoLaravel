<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BotonUpdate extends Component
{
    public $recurso;
    public $elemento;

    /**
     * Create a new component instance.
     */
    public function __construct($recurso, $elemento)
    {
        $this->recurso = $recurso;
        $this->elemento = $elemento;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.boton-update');
    }
}
