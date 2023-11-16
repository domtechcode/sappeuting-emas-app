<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;
use Mews\Captcha\Facades\Captcha;

#[Title('Login')]
#[Layout('components.layouts.app-login')]
class LoginIndex extends Component
{
    #[Rule('required', message: 'Username harus diisi.')]
    public $username;

    #[Rule('required', message: 'Password harus diisi.')]
    public $password;

    // #[Rule('required|captcha', message: 'Captcha harus diisi.')]
    public $captcha;

    public function render()
    {
        return view('livewire.auth.login-index');
    }

    public function login()
    {
        $this->validate();

        // Attempt to log the user in
        if (Auth::attempt(['username' => $this->username, 'password' => $this->password])) {
            // Determine the user's role and redirect to the appropriate dashboard
            $user = Auth::user();
            switch ($user->role) {
                case 'admin-kota':
                    return redirect()->route('dashboardAdminKota');
                    break;

                case 'admin-kecamatan':
                    return redirect()->route('dashboardAdminKecamatan');
                    break;

                case 'admin-kelurahan':
                    return redirect()->route('dashboardAdminKelurahan');
                    break;

                case 'admin-kader':
                    return redirect()->route('dashboardAdminKader');
                    break;

                default:
                    return redirect()->route('login');
                    break;
            }
        }

        session()->flash('error', 'Username/password Salah.');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha' => Captcha::img()]);
    }
}
