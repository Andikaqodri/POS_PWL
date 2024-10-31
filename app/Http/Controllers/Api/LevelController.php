<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LevelModel;
use Illuminate\Support\Facades\Validator;

class LevelController extends Controller
{
    public function index()
    {
        return response()->json(LevelModel::all(), 200);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255', // Sesuaikan dengan kolom yang ada di LevelModel
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $level = LevelModel::create($request->all());
        return response()->json($level, 201);
    }

    public function show(LevelModel $level)
    {
        return response()->json($level, 200);
    }

    public function update(Request $request, LevelModel $level)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255', // Sesuaikan dengan kolom yang ada di LevelModel
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $level->update($request->all());
        return response()->json($level, 200);
    }

    public function destroy(LevelModel $level)
    {
        $level->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Data terhapus',
        ], 200);
    }
}
