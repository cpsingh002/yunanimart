<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Product2;

class HeaderSearchComponent extends Component
{
    public $searchj;
    public $products =[];

    public function mount()
    {
       // $this->fill(request()->only($this->searchj));
    }

    public function productcheck()
    {
        $this->products = Product2::where('name','like','%'.$this->searchj .'%')->where('status',1)->get();

       // dd($this->products);
    }
    public function render()
    {
        return view('livewire.frontend.header-search-component');
    }
}
