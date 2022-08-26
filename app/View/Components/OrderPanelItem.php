<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OrderPanelItem extends Component
{

    public $orderId, $created_at, $total, $client, $position;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($item)
    {
        $this->orderId = $item->id;
        $this->created_at = $item->created_at;
        $this->total = $item->total;
        $this->client = $item->client;
        $this->position = $item->position;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.order-panel-item');
    }
}