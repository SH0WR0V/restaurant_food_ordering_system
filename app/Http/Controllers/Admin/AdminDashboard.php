<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.adminDashboard.dashboard');
    }
}
