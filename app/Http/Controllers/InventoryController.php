<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    
    public function index()
    {
        $inventory = Inventory::latest()->paginate(10);
        return view('pages.inventory.index', compact('inventory'));
    }

    public function create()
    {
        return view('pages.inventory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => ['required', 'string', 'max:255'],
            'quantity'    => ['required', 'integer', 'min:0'],
            'price'       => ['required', 'numeric', 'min:0'],
            'description' => ['nullable', 'string'],
        ]);

        Inventory::create([
            'name'        => $request->name,
            'quantity'    => $request->quantity,
            'price'       => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('inventory.index')->with('success', 'Inventory berhasil ditambahkan.');
    }

     public function edit($id)
    {
        $inventory = Inventory::findOrFail($id);
        return view('pages.inventory.edit', compact('inventory'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'        => ['required', 'string', 'max:255'],
            'quantity'    => ['required', 'integer', 'min:0'],
            'price'       => ['required', 'numeric', 'min:0'],
            'description' => ['nullable', 'string'],
        ]);

        $inventory = Inventory::findOrFail($id);

        $inventory->update([
            'name'        => $request->name,
            'quantity'    => $request->quantity,
            'price'       => $request->price,
            'description' => $request->description,
        ]);

        return redirect()->route('inventory.index')
            ->with('success', 'Inventory berhasil diupdate.');
    }

    public function destroy($id)
    {
        $inventory = Inventory::findOrFail($id);
        $inventory->delete();

        return redirect()->route('inventory.index')
            ->with('success', 'Inventory berhasil dihapus.');
    }
}
