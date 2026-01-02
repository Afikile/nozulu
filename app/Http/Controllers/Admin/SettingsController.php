<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = [
            'company_name' => SiteSetting::get('company_name', 'Nozulu and Ngonyama Trading Enterprises'),
            'tagline' => SiteSetting::get('tagline', 'Specialists in Building and Electrical Construction'),
            'about_us' => SiteSetting::get('about_us', 'With years of experience...'),
            'mission' => SiteSetting::get('mission', 'To provide top-quality construction...'),
            'phone' => SiteSetting::get('phone', '+27 XX XXX XXXX'),
            'email' => SiteSetting::get('email', 'info@nozulu-ngonyama.co.za'),
            'address' => SiteSetting::get('address', 'Your Address Here'),
        ];

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'about_us' => 'required|string',
            'mission' => 'required|string',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'address' => 'required|string|max:255',
        ]);

        foreach ($validated as $key => $value) {
            SiteSetting::set($key, $value, in_array($key, ['about_us', 'mission']) ? 'textarea' : 'text');
        }

        return redirect()->route('admin.settings.index')
            ->with('success', 'Settings updated successfully!');
    }
}
