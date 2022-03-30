<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $email = "";
    public $password = "";
    public $error_email = "";
    public $error_password = "";

    public function login() {
        if ($this->email === "admin-email@gmail.com") {
            if($this->password === "password") {
                f_setCookie(md5('token_gti'), "true");
                return redirect()->route('posts');
            } else {
                session()->flash("error", "Mot de passe incorerect");
            }
        } else {
            session()->flash("error", "Email incorerect");
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
