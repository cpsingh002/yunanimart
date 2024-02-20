<?php

namespace App\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;

class AccountComponent extends Component
{
    use WithFileUPloads;
    public $old_password;
    public $password;
    public $password_confirmation;
    public $name;
    public $email;
    public $phone;
    public $profile;
    public $newprofile;
    public $u_id;

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->profile = Auth::user()->profile;
        $this->phone = Auth::user()->phone;
        $this->email = Auth::user()->email;
        $this->u_id = Auth::user()->id;

    }
    public function render()
    {
        return view('livewire.user.account-component')->layout('layouts.main');
    }


    public function Changepassword()
    {
        $this->dispatch('show-change-password-modal');
    }

    public function updatepassword(Request $request)
    {
        // dd(Auth::user());
        $this->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'old_password' => 'required'
        ]);
        if(Hash::check($this->old_password, Auth::user()->password)) {
            User::where('id',Auth::user()->id)->update(['password' => Hash::make($this->password) ]);
             session()->flash('password_message', 'Password has been updated successfully');
            // Session::flush();
            Auth::guard('web')->logout();
            // Auth::guard('web')->logoutOtherDevices($request->old_password);
            //For hide modal after add post added successfully
            // $this->dispatch('close-modal');
        }else{
            session()->flash('password_message', 'Old Password not match');

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

    public function UpdateINfo()
    {
        $this->validate([
            'name'=>'required',
            'phone' => 'required|numeric|digits:10|unique:users,phone,'.$this->u_id.'',
        ]);
        if($this->newprofile)
        {
            $this->validate([
                'newprofile'=>'required|mimes:jpeg,jpg,png',
            ]);
        }

        $user = User::find($this->u_id);
        $user->name = $this->name;
        $user->phone = $this->phone;
        if($this->newprofile){
            if($user->profile)
            {
                unlink('admin/profilespic'.'/'.$user->profile);
            }

            $imageName= Carbon::now()->timestamp.'.'.$this->newprofile->extension();
            $this->newprofile->storeAs('profilespic',$imageName);
            $user->profile = $imageName;
        }
        
        $user->save();
        session()->flash('message','Info has been upadted successfully!');

    }
}
