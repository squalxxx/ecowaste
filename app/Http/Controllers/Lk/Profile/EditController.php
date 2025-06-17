<?php

namespace App\Http\Controllers\Lk\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();

        return view('lk.profile.edit', compact('user'));
    }
}
