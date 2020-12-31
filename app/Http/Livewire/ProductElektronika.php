<?php

namespace App\Http\Livewire;

use App\Elektronika;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductElektronika extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search, $elektronika;

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($elektronikaId)
    {
        $elektronikaDetail = Elektronika::find($elektronikaId);

        if ($elektronikaDetail) {
            $this->elektronika = $elektronikaDetail;
        }
    }


    public function render()
    {
        if ($this->search) {
            $products = Product::where('elektronika_id', $this->elektronika->id)->where('nama', 'like', '%' . $this->search . '%')->paginate(8);
        } else {
            $products = Product::where('elektronika_id', $this->elektronika->id)->paginate(8);
        }
        return view('livewire.product-index', [
            'products' => $products,
            'title' => $this->elektronika->nama
        ])
            ->extends('layouts.app')
            ->section('content');
    }
}
