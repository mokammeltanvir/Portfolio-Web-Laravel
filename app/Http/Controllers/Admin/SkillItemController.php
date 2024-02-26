<?php

namespace App\Http\Controllers\Admin;

use App\Models\SkillItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\SkillItemDataTable;

class SkillItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SkillItemDataTable $dataTable)
    {
        return $dataTable->render('admin.skill-item.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill-item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'percent' => ['required', 'numeric', 'max:100']
           ]);

           $skill = new SkillItem();
           $skill->name = $request->name;
           $skill->percent = $request->percent;
           $skill->save();

           toastr('Created Successfully!', 'success');

           return redirect()->route('admin.skill-item.index');
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
        $skill = SkillItem::findOrFail($id);
        return view('admin.skill-item.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'percent' => ['required', 'numeric', 'max:100']
        ]);

           $skill = SkillItem::findOrFail($id);
           $skill->name = $request->name;
           $skill->percent = $request->percent;
           $skill->save();

           toastr('Update Successfully!', 'success');

           return redirect()->route('admin.skill-item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = SkillItem::findOrFail($id);
        $skill->delete();
    }
}
