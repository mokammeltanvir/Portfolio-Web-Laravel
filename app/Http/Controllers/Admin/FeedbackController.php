<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\FeedbackDataTable;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FeedbackDataTable $dataTable)
    {
        return $dataTable->render('admin.feedback.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:50'],
            'position' => ['required', 'max:100'],
            'description' => ['required', 'max:1000'],
        ]);

        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->position = $request->position;
        $feedback->description = $request->description;
        $feedback->save();

        toastr('Created successfully', 'success');

        return redirect()->route('admin.feedback.index');
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
        $feedback = Feedback::findOrFail($id);
        return view('admin.feedback.edit', compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:50'],
            'position' => ['required', 'max:100'],
            'description' => ['required', 'max:1000'],
        ]);

        $feedback = Feedback::findOrFail($id);
        $feedback->name = $request->name;
        $feedback->position = $request->position;
        $feedback->description = $request->description;
        $feedback->save();

        toastr('Updated successfully', 'success');

        return redirect()->route('admin.feedback.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();
    }
}
