<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
    /**
     * Новый экземпляр компонента.
     */
    public $product;
    public function __construct($product)
    {
       $this ->product = $product;
    }

    /**
     * Получите содержимое, представляющее компонент.
     */
    public function render(): View|Closure|string /*объект представления|динамического рендеринга */
    {
        return view('components.product-card');
    }
}