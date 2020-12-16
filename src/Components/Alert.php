<?php

namespace Dotim\BsComponents\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Lang;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new Alert instance.
     *
     * @param  string  $type
     * @param  string|null  $message
     * @param  bool  $dismissible
     * @param  string|null  $trans
     *
     * @return void
     */
    public function __construct(
        /**
         * Alert type.
         *
         * @var string $type
         */
        public string $type = 'success',

        /**
         * Alert message.
         *
         * @var string|null $message
         */
        public string|null $message = null,

        /**
         * Alert is dismissible.
         *
         * @var bool $dismissible
         */
        public bool $dismissible = false,

        /**
         * Translation text.
         *
         * @var string|null $trans
         */
        string|null $trans = null
    )
    {
        if ($trans) {
            $this->message = Lang::get($trans);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Renderable
     */
    public function render() : Renderable
    {
        return view('bs::alert');
    }
}
