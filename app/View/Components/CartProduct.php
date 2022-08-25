<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CartProduct extends Component
{

    public $quantity, $product_code;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cart-product');
    }
}