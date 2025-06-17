<?php

namespace App\Http\Controllers\Lk\Request;

use App\Http\Controllers\Controller;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'nullable|string',
            'agreement' => 'required|accepted',
        ]);

        $validated['user_id'] = Auth::id();
        ModelsRequest::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Заявка успешно отправлена'
        ]);
    }
}
