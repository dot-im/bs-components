<?php

namespace Dotim\BsComponents;

use Dotim\BsComponents\Components\Alert;
use Dotim\BsComponents\Components\Breadcrumb;
use Dotim\BsComponents\Components\BreadcrumbItem;
use Dotim\BsComponents\Components\Btn;
use Dotim\BsComponents\Components\Card;
use Dotim\BsComponents\Components\Form;
use Dotim\BsComponents\Components\Input;
use Illuminate\Support\ServiceProvider;

class BsComponentsServiceProvider extends ServiceProvider
{
    /**
     * Blade components list.
     *
     * @var array $components
     */
    protected array $components = [
        Alert::class,
        Breadcrumb::class,
        BreadcrumbItem::class,
        Btn::class,
        Card::class,
        Form::class,
        Input::class,
    ];

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/components', 'bs');

        $this->loadViewComponentsAs('bs', $this->components);
    }
}
