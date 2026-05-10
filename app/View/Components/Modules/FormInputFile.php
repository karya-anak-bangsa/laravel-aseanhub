<?php

namespace App\View\Components\Modules;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInputFile extends Component
{
    public ?string $label;
    public ?string $name;
    public ?string $preview;
    public bool $required;

    public function __construct(
        $label              = null,
        $name               = null,
        $preview            = null,
        $required           = false,
    ) {
        $this->label        = $label;
        $this->name         = $name;
        $this->preview      = $preview;
        $this->required     = $required;
    }

    public function render(): View|Closure|string
    {
        return view('components.modules.form-input-file');
    }
}
