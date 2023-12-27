<?php

namespace App\Http\Controllers\Api;


use App\Models\CentrePoint;
use App\Models\Space;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller; 

class SpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $spaces = Space::all();
        return response()->json(['spaces' => $spaces]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create()
    {
        $centrepoint = CentrePoint::first();
        return response()->json(['centrepoint' => $centrepoint]);
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
            'name' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg',
            'location' => 'required',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move('uploads/imgCover/', $imageName);
        }

        $space = Space::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name'), '-'),
            'location' => $request->input('location'),
            'content' => $request->input('content'),
            'image' => $imageName,
        ]);

        return response()->json([
            'message' => $space ? 'Data berhasil disimpan' : 'Data gagal disimpan',
            'space' => $space,
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
        $space = Space::findOrFail($id);
        return response()->json(['space' => $space]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Space $space
     * @return JsonResponse
     */
    public function edit(Space $space)
    {
        return response()->json(['space' => $space]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Space $space
     * @return JsonResponse
     */
    public function update(Request $request, Space $space)
    {
        $this->validate($request, [
            'name' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg',
            'location' => 'required',
        ]);

        if ($request->hasFile('image')) {
            if (File::exists("uploads/imgCover/" . $space->image)) {
                File::delete("uploads/imgCover/" . $space->image);
            }

            $file = $request->file("image");
            $space->image = time() . '_' . $file->getClientOriginalName();
            $file->move('uploads/imgCover/', $space->image);
        }

        $space->update([
            'name' => $request->name,
            'location' => $request->location,
            'content' => $request->content,
            'slug' => Str::slug($request->name, '-'),
        ]);

        return response()->json([
            'message' => $space ? 'Data berhasil diupdate' : 'Data gagal diupdate',
            'space' => $space,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     * @return JsonResponse
     */
    public function destroy(string $id)
    {
        $space = Space::findOrFail($id);

        if (File::exists("uploads/imgCover/" . $space->image)) {
            File::delete("uploads/imgCover/" . $space->image);
        }

        $space->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
