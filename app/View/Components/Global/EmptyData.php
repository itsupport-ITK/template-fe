<?php

namespace App\View\Components\Global;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EmptyData extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $message = ''
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.global.empty-data');
    }
}
