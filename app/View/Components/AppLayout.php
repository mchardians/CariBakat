<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public string $title;
    public string $stylesheets;
    public string $scripts;
    /**
     * Create a new component instance.
     */
    public function __construct(?string $title = null, ?string $stylesheets = null, ?string $scripts = null)
    {
        $this->title = $title ?? config("app.name");
        $this->stylesheets = $stylesheets ?? "";
        $this->scripts = $scripts ?? "";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.app-layout');
    }
}
