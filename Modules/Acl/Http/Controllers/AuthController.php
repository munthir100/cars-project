<?php

namespace Modules\Acl\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    function login()
    {
        return view('acl::auth.login');
    }
    function register()
    {
        return view('acl::auth.register');
    }
    function forgetPassword()
    {
        return view('acl::auth.forgetPassword');
    }
    function resetPassword()
    {
        return view('acl::auth.resetPassword');
    }
}
