<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consignment;

class ConsignmentController extends Controller
{
    public function index()
    {
        return Consignment::all();
    }

    public function show($id)
    {
        return Consignment::findOrFail($id);
    }

    public function store(Request $request)
    {
        return Consignment::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $consignment = Consignment::findOrFail($id);
        $consignment->update($request->all());
        return $consignment;
    }

    public function destroy($id)
    {
        $consignment = Consignment::findOrFail($id);
        $consignment->delete();
        return response()->json(['message' => 'Consignment deleted successfully']);
    }
}
