<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $vehicles = Vehicle::count();

        return view('dashboard', compact('users', 'vehicles'));
    }
}