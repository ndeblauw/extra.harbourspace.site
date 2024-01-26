<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CrudTextarea extends Component
{
    public string $name;

    public string $label;

    public ?string $value;

    public ?string $placeholder;

    public function __construct(string $name, string $label, ?string $value = null, ?string $placeholder = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->placeholder = $placeholder;
    }

    public function render(): View|Closure|string
    {
        return view('components.crud.textarea');
    }
}
