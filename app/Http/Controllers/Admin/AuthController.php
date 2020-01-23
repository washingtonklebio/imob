<?php

namespace Imob\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Imob\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('admin.index');
    }
}
