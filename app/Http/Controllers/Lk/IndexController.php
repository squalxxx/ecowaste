<?php

namespace App\Http\Controllers\Lk;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('lk.index');
    }
}
