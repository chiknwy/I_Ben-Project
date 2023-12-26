<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CentrePoint;
use Illuminate\Http\JsonResponse;

class CentreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $centrePoints = CentrePoint::all();
        return response()->json(['centrePoints' => $centrePoints]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create()
    {
        return response()->json(['message' => 'Create endpoint is not supported for this resource.']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'location' => 'required'
        ]);

        $centrePoint = CentrePoint::create([
            'location' => $request->input('location'),
        ]);

        return response()->json([
            'message' => $centrePoint ? 'Data berhasil disimpan' : 'Data gagal disimpan',
            'centrePoint' => $centrePoint,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id)
    {
        $centrePoint = CentrePoint::findOrFail($id);
        return response()->json(['centrePoint' => $centrePoint]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CentrePoint $centrePoint
     * @return JsonResponse
     */
    public function edit(CentrePoint $centrePoint)
    {
        return response()->json(['message' => 'Edit endpoint is not supported for this resource.']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param CentrePoint $centrePoint
     * @return JsonResponse
     */
    public function update(Request $request, CentrePoint $centrePoint)
    {
        $centrePoint->update([
            'location' => $request->input('location'),
        ]);

        return response()->json([
            'message' => $centrePoint ? 'Data berhasil diupdate' : 'Data gagal diupdate',
            'centrePoint' => $centrePoint,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        $centrePoint = CentrePoint::findOrFail($id);
        $centrePoint->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
