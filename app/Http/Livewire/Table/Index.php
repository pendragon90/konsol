<?php

namespace App\Http\Livewire\Table;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::paginate(10);

        return view('livewire.table.index', ['products' => $products]);
    }
}
