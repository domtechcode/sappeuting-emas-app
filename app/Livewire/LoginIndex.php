<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class LoginIndex extends Component
{
    #[Title('Login')]
    #[Layout('components.layouts.app-login')]
    public function render()
    {
        return view('livewire.login-index');
    }
}
