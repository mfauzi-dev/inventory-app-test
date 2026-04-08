<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryApiController extends Controller
{
    public function index()
    {
        $inventories = Inventory::latest()->get();

        return response()->json([
            'success' => true,
            'message' => 'List data inventory',
            'data' => $inventories
        ]);
    }

    public function show($id)
    {
        $inventory = Inventory::find($id);

        if (!$inventory) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail inventory',
            'data' => $inventory
        ]);
    }
}