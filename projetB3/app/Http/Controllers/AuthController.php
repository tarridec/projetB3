<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        Log::info('Login attempt:', $credentials);

        // Check if user exists
        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            Log::warning('User not found:', ['email' => $credentials['email']]);
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Attempt authentication
        if (Auth::attempt($credentials)) {
            $token = $user->createToken('authToken')->plainTextToken;
            Log::info('User authenticated:', ['user_id' => $user->id, 'token' => $token]);
            return redirect('/profile');
        }

        Log::warning('Authentication failed for user:', ['email' => $credentials['email']]);
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/signin');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('edit-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $data = $request->validate([
            'username' => 'required|string|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        if ($request->filled('password')) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }

    public function destroy(Request $request)
    {
        $user = Auth::user();

        // Revoke all tokens...
        $user->tokens()->delete();

        // Delete user
        $user->delete();

        Auth::logout();

        return redirect('/')->with('message', 'Votre compte a été supprimé avec succès.');
    }

    public function user(Request $request)
    {
        return response()->json($request->user());
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'username' => 'required|string|unique:users',
            'country' => 'required|string',
            'birthday' => 'required|date',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6'
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        $token = $user->createToken('authToken')->plainTextToken;

        return redirect('/signin');
    }
}