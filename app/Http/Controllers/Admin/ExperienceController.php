<?php

namespace App\Http\Controllers\Admin;

use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experience = Experience::first();
        return view('admin.experience.index', compact('experience'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['image', 'max:5000'],
            'title' => ['required', 'max:200'],
            'description' => ['required', 'max:1000'],
            'phone' => ['nullable', 'max:100'],
            'email' => ['nullable', 'max:100', 'email']
        ]);

        $experience = Experience::find($id);
        $imagePath = handleUpload('image', $experience);

        Experience::updateOrCreate(
            ['id' => $id],
            [
               'image' => (!empty($imagePath) ? $imagePath : $experience->image),
               'title' => $request->title,
               'description' => $request->description,
               'phone' => $request->phone,
               'email' => $request->email
            ]
        );

        toastr('Updated Successfully!', 'success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
