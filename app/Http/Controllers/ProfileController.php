<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->hasFile('profile_picture')) {

    $file = $request->file('profile_picture');

    $path = $file->store('profile_pictures', 'public');

    $user->profile_picture = $path;
}

        $user->save();

        return back()->with('success', 'Profile updated successfully!');
    }
}
