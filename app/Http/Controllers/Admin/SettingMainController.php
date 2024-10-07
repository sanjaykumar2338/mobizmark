<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Setting;
use Auth;

class SettingMainController extends Controller
{
    public function index()
    {
        // Retrieve the user's settings if they exist
        $setting = Setting::where('user_id', Auth::id())->first();
        return view('settings.index', compact('setting'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'google_search_id' => 'required|string|max:255',
        ]);

        // Update or create the setting for the user
        $setting = Setting::updateOrCreate(
            ['user_id' => Auth::id()],
            ['google_search_id' => $request->google_search_id]
        );

        // Return response for AJAX call
        return response()->json(['message' => 'Google Search ID saved successfully!']);
    }
}