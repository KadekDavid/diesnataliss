<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Submisi;

class SubmisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function upload(Request $request)
    {
        // validasi request
        $request->validate([
            'file_pdf' => 'required|mimes:pdf',
        ]);

        $path = $request->file('file_pdf')->store('public/pdf');

        // tambahkan record ke database
        $pdf = new Submisi;
        $pdf->file_pdf = $path;
        $pdf->save();

        // redirect ke halaman yang dituju
        return redirect()->back()->with('message', 'File PDF berhasil diupload.');
    }
}
