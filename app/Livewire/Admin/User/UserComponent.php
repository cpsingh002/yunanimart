<?php

namespace App\Livewire\Admin\User;

use Livewire\Component;

class UserComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.user.user-component')->layout('layouts.admin');
    }
}
