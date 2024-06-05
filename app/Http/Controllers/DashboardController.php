<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $role = auth()->user()->role;
        if (in_array($role, ['Superadmin', 'Admin'])) {
            return view('admin.dashboard');
        } else {
            return view('user.dashboard');
        }
    }
}
