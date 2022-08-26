<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OrderItem extends Component
{

    public $manufacturer, $model, $type, $code, $size, $price, $description, $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        // dd($data);
        $item = $data['productData'];

        $this->manufacturer = $item->manufacturer;
        $this->model = $item->model;
        $this->type = $item->type;
        $this->code = $item->code;
        $this->size = $item->size;
        $this->price = number_format($item->price, 2);
        $this->description = $item->description;
        $this->image = $item->picture_name;
        $this->quantity = $data['quantity'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.order-item');
    }
}