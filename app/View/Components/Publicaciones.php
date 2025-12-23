<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Publicaciones extends Component
{
    public $publicaciones;
    public $hayLink;

    /**
     * Create a new component instance.
     */
    public function __construct($publicaciones, $hayLink = true)
    {
        $this->publicaciones = $publicaciones;
        $this->hayLink = $hayLink;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.publicaciones');
    }
}
