<?php

namespace Dotim\BsComponents\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new Card instance.
     *
     * @return void
     */
    public function __construct(
        /**
         * form method.
         *
         * @var string $method
         */
        public string $method = 'GET',

        /**
         * form action .
         *
         * @var string|null $action
         */
        public string|null $action = null,

        /**
         * Form method field.
         *
         * @var string $methodField
         */
        public string $methodField = '',

        /**
         * form action url.
         *
         * @var string|null $url
         */
        string|null $url = null,

        /**
         * form action route.
         *
         * @var string|null $route
         */
        string|null $route = null
    )
    {
        $this->method = strtoupper($this->method);

        $this->methodField = method_field($this->method);

        if ($this->method !== 'GET') {
            $this->method = 'POST';
        }

        if ($url) {
            $this->action = url($url);
        }

        if ($route) {
            $this->action = route($route);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Renderable
     */
    public function render() : Renderable
    {
        return view('bs::form');
    }
}
