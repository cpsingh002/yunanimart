<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class AccountComponent extends Component
{
    public $old_password;
    public $password;
    public $password_confirmation;
    public function render()
    {
        return view('livewire.user.account-component')->layout('layouts.main');
    }


    public function Changepassword()
    {
        $this->dispatch('show-change-password-modal');
    }

    public function updatepassword()
    {
        // dd(Auth::user());
        $this->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'old_password' => 'required'
        ]);
        if(Hash::check($this->old_password, Auth::user()->password)) {
            User::where('id',Auth::user()->id)->update(['password' => Hash::make($this->password) ]);
            // session()->flash('message', 'Password has been updated successfully');
            Auth::logoutOtherDevices('password');
            //For hide modal after add post added successfully
            // $this->dispatch('close-modal');
        }else{
            session()->flash('message', 'Old Password not match');

            //For hide modal after add post added successfully
            // $this->dispatch('close-modal');
        }
        
    }
    public function close()
    {
        $this->resetInputs();
    }
    public function resetInputs()
    {
        $this->password = '';
        $this->old_password = '';
        $this->password_confirmation = '';
       
    }
}
