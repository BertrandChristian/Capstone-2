<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\BeasiswaDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Laravel\Prompts\alert;

class BeasiswaDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Beasiswa $beasiswa
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function index()
    {
        return view('beasiswa_detail.index',[
            'bds' => BeasiswaDetail::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('beasiswa_detail.create');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
