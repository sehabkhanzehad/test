<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        // Logic for displaying the user dashboard
        return view('user.dashboard.index');
    }
}
