<?php

namespace App\Http\Controllers\Lk\Request;

use App\Http\Controllers\Controller;
use App\Models\Request as ModelRequest;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request, ModelRequest $modelRequest)
    {
        abort_if($modelRequest->user_id !== auth()->id(), 403);

        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        $modelRequest->update($validated);

        return redirect()
            ->route('lk.requests.index')
            ->with('success', "Заявка #{$modelRequest->id} успешно обновлена");
    }
}
