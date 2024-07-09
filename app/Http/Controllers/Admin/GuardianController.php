<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Guardian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guardians = Guardian::all();
        return view('admin.guardian.all-guardian', compact('guardians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guardian.create-guardian');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone' => 'required|string|unique:teachers,phone|max:20',
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => rand(111111,999999),
            'type' => UserRoleEnum::PARENT->value,
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('guardians/images/', 'public');
            $validated['image'] = url(Storage::url($imagePath));

            if ($request->image) {
                Storage::disk('public')->delete($request->image);
            }
        }

        $guardian = Guardian::create([
            'user_id' => $user->id,
            'phone' => $validated['phone'],
            'name' => $validated['name'],
            'image' => $validated['image'],
            'address' => $validated['address'],
        ]);

        return redirect()->route('admin.guardian.index')->with('success', 'Guardian Added Successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Guardian $guardian)
    {
        return view('admin.guardian.view-guardian', compact('guardian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guardian $guardian)
    {
        return view('admin.guardian.edit-guardian', compact('guardian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guardian $guardian)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $guardian->user->id,
            'phone' => 'required|string|unique:guardians,phone,' . $guardian->id,
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',

        ]);

        //update the user model
        $guardian->user->update([
            'name'=> $validated['name'],
            'email'=> $validated['email']
        ]);

        //Handle image upload
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('guardians/image/', 'public');
            $validated['image']  = Storage::url($imagePath);
        }

        //Delete old image if exists
        if ($guardian->image) {
            Storage::disk('public')->delete($guardian->image);
        } else {
            $validated['image'] = $guardian->image; // Keep old image if not updated
        }

        //Update the guarduan model

        $guardian->update([
            'phone'=> $validated['phone'],
            'address'=> $validated['address'],
            'image'=> $validated['image'],
        ]);

        return to_route('admin.guardian.show')->with('success', 'Guardian Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
