<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
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
    // Validasi input data
    $request->validate([
        'nama'       => 'required|min:5',
        'email'      => 'required|email',
        'pertanyaan' => 'required|min:10|max:300',
    ], [
        'nama.required'       => 'Nama tidak boleh kosong',
        'nama.min'            => 'Nama minimal 5 karakter',
        'email.required'      => 'Email tidak boleh kosong',
        'email.email'         => 'Email tidak valid',
        'pertanyaan.required' => 'Pertanyaan tidak boleh kosong',
        'pertanyaan.min'      => 'Pertanyaan minimal 10 karakter',
        'pertanyaan.max'      => 'Pertanyaan maksimal 300 karakter',
    ]);

    // Format pesan sesuai petunjuk modul
    $pesanInfo = "Terimakasih {$request->nama}! Pertanyaan ini: {$request->pertanyaan} akan segera direspon melalui email {$request->email}";

    // Redirect kembali ke halaman home membawa flash data 'info'
    return redirect()->back()->with('info', $pesanInfo);
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
