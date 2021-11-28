<?php

namespace App\Http\Controllers;

use App\Models\TodoModel;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        try {
            $data = TodoModel::all();
            return response()->json([
                'status' => true,
                'data' => $data,
                'messages' => 'Success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'messages' => $e->getMessage()
            ]);
        }
    }

    public function store(Request $request)
    {
        //
    }

    public function show($pid)
    {
        try {
            $data = TodoModel::where('pid', $pid)->get();

            if ($data->count() > 0) {
                return response()->json([
                    'status' => true,
                    'data' => $data,
                    'messages' => 'Success'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'messages' => 'Data not found'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'messages' => $e->getMessage()
            ]);
        }
    }

    public function update(Request $request, $pid)
    {
        //
    }

    public function destroy($pid)
    {
        try {
            $data = TodoModel::where('pid', $pid);

            if ($data->count() > 0) {
                $data->delete();
                return response()->json([
                    'status' => true,
                    'messages' => 'Deleted Successfully'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'messages' => 'Data not found'
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'messages' => $e->getMessage()
            ]);
        }
    }
}
