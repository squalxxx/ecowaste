<?php

namespace App\Http\Controllers\Lk\Request;

use App\Http\Controllers\Controller;
use App\Models\Request as ModelsRequest;
use Illuminate\Support\Facades\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $requests = ModelsRequest::where('user_id', auth()->id())->latest()->paginate(10);

        return view('lk.requests.index', compact('requests'));
    }
}
