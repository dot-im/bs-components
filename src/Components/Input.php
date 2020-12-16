<?php

namespace Dotim\BsComponents\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new Input instance.
     *
     * @return void
     */
    public function __construct(
        /**
         * input type.
         *
         * @var string  $type
         */
        public string $type = 'text',

        /**
         * input id.
         *
         * @var string|null $id
         */
        public string|null $id = null,

        /**
         * input label.
         *
         * @var string|null $label
         */
        public string|null $label = null,

        /**
         * input has old value.
         *
         * @var bool $hasOld
         */
        public bool $hasOld = false,

        /**
         * input has errors validation.
         *
         * @var bool $hasErrors
         */
        public bool $hasErrors = false,
    )
    {
        if (! $this->id) {
            $this->id = "input-" . md5(uniqid());
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Renderable
     */
    public function render() : Renderable
    {
        return view('bs::input');
    }
}
