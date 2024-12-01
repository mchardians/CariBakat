<?php

namespace App\View\Components\Partials\Template;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageHeader extends Component
{
    public string $title;
    public array $breadcrumbs;
    /**
     * Create a new component instance.
     */
    public function __construct(?string $breadcrumbs = null, ?string $title = null)
    {
        $this->title = $title ?? config("app.name");
        $this->breadcrumbs = $breadcrumbs ? array_map('trim', explode(",", $breadcrumbs)) : ["dahboard"];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.template.page-header');
    }
}
