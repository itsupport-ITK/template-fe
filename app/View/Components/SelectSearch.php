<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectSearch extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $errorTag = '',
        public string $errorKey = '',
        public string $value = ''
    )
    {
        
        $this->errorKey = $this->errorKey ?: config('errorkeys.default');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-search');
    }
}
