<?php

namespace Modules\Acl\Http\Livewire\Auth;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Mail\PasswordResetToken;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class ForgetPassword extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email|exists:users,email',
    ];

    public function render()
    {
        return view('acl::livewire.auth.forget-password');
    }

    public function forgetPassword()
    {
        $credentials = $this->validate();
        $token = Hash::make(123456);
        DB::table('password_resets')->updateOrInsert([
            'email' => $credentials['email'], 
            'token' => $token,
            'created_at' => Carbon::now()
          ]);
        // Mail::to($credentials['email'])->send(new PasswordResetToken($token));
        return redirect()->route('password.reset')->with('status', 'Password reset token sent!');
    }
}
