<?php

namespace Dotim\BsComponents\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new Card instance.
     *
     * @param  string|null  $header
     * @param  string|null  $body
     * @param  string|null  $footer
     *
     * @return void
     */
    public function __construct(
        /**
         * Card Header.
         *
         * @var string|null $header
         */
        public string|null $header = null,

        /**
         * Card Body.
         *
         * @var string|null $body
         */
        public string|null $body = null,

        /**
         * Card Footer.
         *
         * @var string|null $footer
         */
        public string|null $footer = null
    ) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return Renderable
     */
    public function render() : Renderable
    {
        return view('bs::card');
    }
}
