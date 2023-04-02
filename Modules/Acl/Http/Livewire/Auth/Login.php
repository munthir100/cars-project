<?php

namespace Modules\Acl\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Login extends Component
{
    public $username, $password;

    protected $rules = [
        'username' => ['required'],
        'password' => 'required',
    ];
    public function render()
    {
        return view('acl::livewire.auth.login');
    }

    public function login()
    {
        $this->validate();

        $credantials = [
            'username' => $this->username,
            'password' => $this->password,
        ];

        if (is_numeric($this->username)) {
            $user = User::where('phone', $this->username)->first();
        } else {
            $user = User::where('email', $this->username)->first();
        }
        if ($user && Hash::check($this->password, $user->password)) {
            Auth::login($user);
            return to_route('dashboard.index');
        } else {
            $this->addError('credantials', 'Please Enter A Vaild Credantials');
            return;
        }
    }
}
