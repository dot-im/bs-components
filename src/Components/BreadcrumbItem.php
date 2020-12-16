<?php

namespace Dotim\BsComponents\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Lang;
use Illuminate\View\Component;

class BreadcrumbItem extends Component
{
    /**
     * Create a new BreadcrumbItem instance.
     *
     * @param  string|null  $text
     * @param  string|null  $href
     * @param  bool  $active
     * @param  string|null  $trans
     * @param  string|null  $route
     * @param  string|null  $url
     *
     * @return void
     */
    public function __construct(
        /**
         * Breadcrumb item text.
         *
         * @var string|null $text
         */
        public string|null $text = null,

        /**
         * Breadcrumb item href url.
         *
         * @var string|null $href
         */
        public string|null $href = null,

        /**
         * Breadcrumb item is active.
         *
         * @var bool $active
         */
        public bool $active = false,

        /**
         *
         */
        string|null $trans = null,

        /**
         * Breadcrumb item route url.
         *
         * @var string|null $route
         */
        string|null $route = null,

        /**
         * Breadcrumb item url.
         *
         * @var string|null
         */
        string|null $url = null
    )
    {
        if ($trans) {
            $this->text = Lang::get($trans);
        }

        if ($route) {
            $this->href = route($route);
        }

        if ($url) {
            $this->href = url($url);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Renderable
     */
    public function render() : Renderable
    {
        return view('bs::breadcrumb-item');
    }
}
