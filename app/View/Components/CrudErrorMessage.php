<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CrudErrorMessage extends Component
{
    public string $field;

    public function __construct(string $field)
    {
        $this->field = $field;
    }

    public function render(): View|Closure|string
    {
        return view('components.crud.error-message');
    }
}
