<?php

namespace Dotim\BsComponents\Components;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Select option list.
     *
     * @var array|null $options
     */
    public array|null $options;

    /**
     * select option if value equal.
     *
     * @var string|null
     */
    public string|null $selected;

    public function __construct(array|null $options = null, string|null $selected)
    {
        $this->options = $options;
        $this->selected = $selected;
    }

    /**
     * Determine if the given option is the current selected option.
     *
     * @param  string  $option
     * @return string|null
     */
    public function isSelected($option)
    {
        if($option === $this->selected) {
            return "selected=selected";
        }

        return null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Renderable
     */
    public function render() : Renderable
    {
        return view('bs::select');
    }
}
