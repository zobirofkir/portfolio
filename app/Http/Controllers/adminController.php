<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    /**
     * Show the login form.
     */
    public function create()
    {
        return view("auths.login");
    }

    /**
     * Authenticate the admin.
     */
    public function store(Request $request)
    {
        $credentials = $request->only('name', 'password');
    
        // Retrieve the user by their name
        $user = User::where('name', $credentials['name'])->first();
    
        // Check if a user with the given name exists
        if ($user) {
            // Verify the password
            if ($user->password === $credentials['password']) {
                // Authentication passed...
                Auth::login($user);
                return redirect()->intended('/blog/create');
            }
        }
    
        // Authentication failed...
        throw ValidationException::withMessages([
            'error' => ['Invalid name or password'],
        ]);
    }
    
    // Other methods omitted for brevity...
}
