<?php

namespace Modules\Acl\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetPassword extends Component
{
    public $email, $new_password, $new_password_confirmation;

    protected $rules = [
        'email' => 'required',
        'new_password' => 'required|confirmed',
        'new_password_confirmation' => 'required'
    ];
    public function render()
    {
        return view('acl::livewire.auth.reset-password');
    }
    function resetPassword()
    {
        $this->validate();
        $updatePassword = DB::table('password_resets')->where('email', $this->email)->first();
        
        if (!$updatePassword || !Hash::check(123456,$updatePassword->token)) {
            $this->addError('email', 'Invalid email.');
            return;
        }
        DB::table('users')->where('email', $this->email)->update([
            'password' => Hash::make($this->new_password),
        ]);
        DB::table('password_resets')->where(['email' => $this->email])->delete();
        return redirect('/');
    }
}
