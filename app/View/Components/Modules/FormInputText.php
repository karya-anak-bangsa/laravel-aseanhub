<?php

namespace App\View\Components\Modules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInputText extends Component
{
    public ?string $label;
    public ?string $name;
    public ?string $value;
    public ?string $placeholder;
    public bool $required;

    public function __construct(
        $label                  = null,
        $name                   = null,
        $value                  = null,
        $placeholder            = null,
        $required               = false,
    ) {
        $this->label            = $label;
        $this->name             = $name;
        $this->value            = $value;
        $this->placeholder      = $placeholder;
        $this->required         = $required;
    }

    public function render(): View|Closure|string
    {
        return view('components.modules.form-input-text');
    }
}
