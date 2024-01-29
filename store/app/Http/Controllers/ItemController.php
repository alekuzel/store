<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    // Show all the items
    public function index()
    {
        return Item::all();
    }

    // Show specific item by id
    public function show($id)
    {
        return Item::findOrFail($id);
    }

    // Create new item
    public function store(Request $request)
    {
        $item = Item::create($request->all());

        return response()->json($item);
    }

    // Update item
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    // Delete item
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return response()->json(['message' => 'Item removed!']);
    }
}
