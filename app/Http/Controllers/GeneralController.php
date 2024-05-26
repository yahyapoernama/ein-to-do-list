<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GeneralController extends Controller
{
    public function changeTheme(Request $request)
    {
        $request->validate([
            'theme' => 'required|string'
        ]);

        if ($request->theme == 'dark-theme') {
            Session::put('theme', $request->theme);
        } else {
            Session::forget('theme');
        }

        return response()->json(['message' => 'Theme changed successfully']);
    }
}
