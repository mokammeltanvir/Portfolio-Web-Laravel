<?php

namespace App\Http\Controllers\Admin;

use App\Models\FooterInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footerInfo = FooterInfo::first();
        return view('admin.footer-info.index', compact('footerInfo'));
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
            'info' => ['max:200'],
            'copy_right' => ['max:200'],
            'powered_by' => ['max:200']
        ]);

        FooterInfo::updateOrCreate(
            ['id' => $id],
            [
                'info' => $request->info,
                'copy_right' => $request->copy_right,
                'powered_by' => $request->powered_by
            ]
        );

        toastr()->success('Updated Successfully', 'Congrats');

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
