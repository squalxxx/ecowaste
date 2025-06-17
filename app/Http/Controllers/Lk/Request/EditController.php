<?php

namespace App\Http\Controllers\Lk\Request;

use App\Http\Controllers\Controller;
use App\Models\Request as ModelRequest;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Request $request, ModelRequest $modelRequest)
    {
        abort_if($modelRequest->user_id !== auth()->id(), 403);

        return view('lk.requests.edit', compact('modelRequest'));
    }
}
