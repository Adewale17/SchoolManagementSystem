<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRole;
use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Enum;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teacher.all-teacher', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.teacher.create-teacher');
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
            'type' => UserRoleEnum::TEACHER->value,
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('teachers/images/', 'public');
            $validated['image'] = url(Storage::url($imagePath));

            if ($request->image) {
                Storage::disk('public')->delete($request->image);
            }
        }

        $teacher = Teacher::create([
            'user_id' => $user->id,
            'phone' => $validated['phone'],
            'image' => $validated['image'],
            'address' => $validated['address'],
        ]);

        return redirect()->route('admin.teacher.index')->with('success', 'Teacher Added Successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('admin.teacher.view-teacher', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        $editting = true;
        return view('admin.teacher.edit-teacher',compact('teacher', 'editting'));
    }

    /**
     * Update the specified resource in storage.
     */

        public function update(Request $request, Teacher $teacher)
        {
             // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $teacher->user->id,
            'phone' => 'required|string|unique:teachers,phone,' . $teacher->id,
            'address' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        // Update User model
        $teacher->user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('teachers/images/', 'public');
            $validated['image'] = Storage::url($imagePath);

            // Delete old image if exists
            if ($teacher->image) {
                Storage::disk('public')->delete($teacher->image);
            }
        } else {
            $validated['image'] = $teacher->image; // Keep old image if not updated
        }

        // Update Teacher model
        $teacher->update([
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'image' => $validated['image'],
        ]);

        // Redirect to the show route with a success message
        return to_route('admin.teacher.index')->with('success', 'Teacher Updated Successfully');
        }



    /**
     * Remove the specified resource from storage.
     */
        public function destroy(Teacher $teacher) {
        // Delete the associated user
        $teacher->user()->delete();

        // Delete the teacher's image if it exists
        if ($teacher->image) {
            Storage::disk('public')->delete($teacher->image);
        }

        // Delete the teacher record
        $teacher->delete();

        return to_route('admin.teacher.index')->with('success', 'Teacher and User Deleted Successfully');
    }

}
