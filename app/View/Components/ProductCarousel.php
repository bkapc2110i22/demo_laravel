<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCarousel extends Component
{
    /**
     * Create a new component instance.
     * @return void
     */
    public $products;
    public $title;

    public function __construct($data, $title)
    {
        $this->products = $data;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-carousel');
    }
}
