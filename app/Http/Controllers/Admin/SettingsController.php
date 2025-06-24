<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function edit()
    {
        return view('admin.settings.edit');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'logotype' => 'nullable|image|mimes:jpg,jpeg,png,svg',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string',
            'work_time' => 'required|string|max:255',
        ]);

        $setting = Setting::first();

        if (!$setting) {
            $setting = Setting::create(array_merge($data, ['logotype' => null]));
        }

        if ($request->hasFile('logotype')) {
            $extension = $request->file('logotype')->getClientOriginalExtension();
            $filename = 'logotype.' . $extension;
            $path = 'images/' . $filename;

            if ($setting->logotype && Storage::disk('public')->exists($setting->logotype)) {
                Storage::disk('public')->delete($setting->logotype);
            }

            $request->file('logotype')->storeAs('images', $filename, 'public');
            $data['logotype'] = $path;
        }

        $setting->update($data);

        return redirect()
            ->route('admin.settings.edit')
            ->with('alert', 'Настройки сайта успешно обновлены!');
    }
}
