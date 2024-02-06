<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Product2;

class HeaderSearchComponent extends Component
{
    public $searchj;
    public $prodhjhjucts =[];

    public function mount()
    {
        $this->fill(request()->only($this->searchj));
    }

    public function productcheck()
    {
        $this->prodhjhjucts = Product2::where('name','like','%'.$this->searchj .'%')->get();

       // dd($this->products);
    }
    public function render()
    {
        return view('livewire.frontend.header-search-component');
    }
}
