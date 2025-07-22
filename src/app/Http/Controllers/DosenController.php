<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'nidn' => 'required|unique:dosens,nidn',
            'email' => 'required|email|unique:dosens,email',
            'prodi' => 'required|string|max:50',
        ]);

        Dosen::create($validated);

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan!');
    }

    public function show(Dosen $dosen)
    {
        return view('dosen.show', compact('dosen'));
    }

    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'nidn' => 'required|unique:dosens,nidn,' . $dosen->id,
            'email' => 'required|email|unique:dosens,email,' . $dosen->id,
            'prodi' => 'required|string|max:50',
        ]);

        $dosen->update($validated);

        return redirect()->route('dosen.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data berhasil dihapus!');
    }
}
