<?php

namespace App\Http\Controllers\Admin;

use App\Models\TyperTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\TyperTitleDataTable;

class TyperTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index(TyperTitleDataTable $dataTable)
    {
        return $dataTable->render('admin.typer-title.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.typer-title.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:200']
        ]);

        $create = new TyperTitle();
        $create->title = $request->title;
        $create->save();
        toastr()->success('Created Successfully', 'Congrats');

        return redirect()->route('admin.typer-title.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = TyperTitle::findOrFail($id);
        return view('admin.typer-title.edit', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'max:200']
        ]);

        $edit = TyperTitle::findOrFail($id);
        $edit->title = $request->title;
        $edit->save();
        toastr()->success('Updated Successfully', 'Congrats');

        return redirect()->route('admin.typer-title.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $title = TyperTitle::findOrFail($id);
        $title->delete();
    }
}
