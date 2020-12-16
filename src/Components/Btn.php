<?php

namespace Dotim\BsComponents\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Lang;
use Illuminate\View\Component;

class Btn extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  string|null  $text
     * @param  string  $type
     * @param  string|null  $href
     * @param  bool  $disabled
     * @param  string|null  $trans
     * @param  string|null  $route
     * @param  string|null  $url
     * @param  string|null  $size
     *
     * @return void
     */
    public function __construct(
        /**
         * btn text.
         *
         * @var string|null $text
         */
        public string|null $text = null,

        /**
         * btn type.
         *
         * @var string $type
         */
        public string $type = 'success',

        /**
         * btn link href.
         *
         * @var string|null $href
         */
        public string|null $href = null,

        /**
         * btn is disable.
         *
         * @var bool $disabled
         */
        bool $disabled = false,

        /**
         * btn trans text.
         *
         * @var string|null $trans
         */
        string|null $trans = null,

        /**
         * btn link route href.
         *
         * @var string|null $route
         */
        string|null $route = null,

        /**
         * btn link url href.
         *
         * @var string|null $url
         */
        string|null $url = null,

        /**
         * btn size.
         *
         * @var string|null $size
         */
        string|null $size = null
    )
    {
        if ($disabled) {
            $this->type = "{$this->type} disabled";
        }

        if ($size) {
            $this->type = "{$this->type} btn-{$size}";
        }

        if ($trans) {
            $this->text = Lang::get($trans);
        }

        if ($url) {
            $this->href = url($url);
        }

        if ($route) {
            $this->href = route($route);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Renderable
     */
    public function render() : Renderable
    {
        return view('bs::btn');
    }
}
