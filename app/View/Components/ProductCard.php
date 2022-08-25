<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{

    public $manufacturer, $model, $type, $code, $size, $price, $description, $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->manufacturer = $product->manufacturer;
        $this->model = $product->model;
        $this->type = $product->type;
        $this->code = $product->code;
        $this->size = $product->size;
        $this->price = number_format($product->price, 2);
        $this->description = $product->description;
        $this->image = $product->picture_name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-card');
    }
}