<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    // Tampilkan profil
    public function show($userId)
    {
        $profile = Profile::where('user_id', $userId)->first();
        $user = User::find($userId);

        if ($profile) {
            return response()->json(['profile' => $profile, 'user' => $user]);
        }

        return response()->json(['message' => 'Profile not found'], 404);
    }

    // Tambah atau update profil
    public function storeOrUpdate(Request $request, $userId)
    {
        $validated = $request->validate([
            'bio' => 'nullable|string|max:255',
            'fullname' => 'required|string|max:255',
            'nik' => 'required|numeric|digits:16',
            'gender' => 'required|in:Laki - Laki,Perempuan',
            'birth_place' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'email' => 'required|email|unique:users,email,' . $userId,
            'phone' => 'nullable|string|max:15',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profile = Profile::firstOrNew(['user_id' => $userId]);
        $profile->fill($validated);

        if ($request->hasFile('profile_picture')) {
            if ($profile->profile_picture) {
                Storage::disk('public')->delete($profile->profile_picture);
            }
            $profile->profile_picture = $request->file('profile_picture')->store('profiles', 'public');
        }
        $profile->save();

        $user = User::findOrFail($userId);
        $user->update([
            'fullname' => $validated['fullname'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
        ]);

        return response()->json(['message' => 'Profile saved successfully', 'profile' => $profile, 'user' => $user]);
    }

    // Update profil
    public function update(Request $request, $id)
    {
        $request->validate([
            'bio' => 'nullable|string|max:500',
            'fullname' => 'required|string|max:255',
            'nik' => 'nullable|string|max:16',
            'gender' => 'nullable|string|in:Laki - Laki,Perempuan',
            'birth_date' => 'nullable|date',
            'birth_place' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15',
            'profile_picture' => 'nullable|image|max:2048',
        ]);

        $user = User::findOrFail($id);

        if ($user->id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $profile = $user->profile;
        $profile->bio = $request->input('bio');
        $profile->nik = $request->input('nik');
        $profile->gender = $request->input('gender');
        $profile->birth_date = $request->input('birth_date');
        $profile->tempat_lahir = $request->input('birth_place');
        $profile->save();

        $user->fullname = $request->input('fullname');
        $user->phone = $request->input('phone');
        $user->save();

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $fileName = $user->id . '_profile.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('profile_pictures', $fileName, 'public');
            $profile->profile_picture = $filePath;
            $profile->save();
        }

        return redirect()->route('pelamar.profile')->with('success', 'Profil berhasil diperbarui.');
    }

    // Hapus profil
    public function destroy($userId)
    {
        $profile = Profile::where('user_id', $userId)->first();

        if ($profile) {
            if ($profile->profile_picture) {
                Storage::disk('public')->delete($profile->profile_picture);
            }
            $profile->delete();
            return response()->json(['message' => 'Profile deleted successfully']);
        }

        return response()->json(['message' => 'Profile not found'], 404);
    }
}
