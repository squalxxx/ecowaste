<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Request as ModelRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function index(Request $request)
    {
        $requests = ModelRequest::latest()->paginate(10);

        return view('admin.requests.index', compact('requests'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'nullable|string',
            'agreement' => 'required|accepted',
        ]);

        $validated['user_id'] = Auth::id();
        ModelRequest::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Заявка успешно отправлена'
        ]);
    }

    public function edit(Request $request, ModelRequest $modelRequest)
    {
        return view('admin.requests.edit', compact('modelRequest'));
    }

    public function update(Request $request, ModelRequest $modelRequest)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        $modelRequest->update($validated);

        return redirect()
            ->route('admin.requests.edit', $modelRequest->id)
            ->with('alert', "Заявка #{$modelRequest->id} успешно обновлена!");
    }
}
