<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manufacturers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ControllerManufacturersManager extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $manufacturer = Manufacturers::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.manufacturer.table', compact('manufacturer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.manufacturer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'image' =>  'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/manufacturer/'), $imageName);

        $manu = new Manufacturers([
            'name' => $request['name'],
            'image' => $imageName,
        ]);
        if ($manu->save()) {
            return redirect()->route('manufacture.table')->with('success', 'Thêm hãng thành công');
        }
        return back();
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

        if (!$manufacturer = Manufacturers::find($id)) {
            return redirect()->route('manufacture.table')->with('errors', 'Danh mục không tồn tại');
        }
        $manufacturer = Manufacturers::find($id);
        return view('backend.manufacturer.edit', compact('manufacturer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!$manu = Manufacturers::find($id)) {
            return redirect()->route('manufacture.table')->with('errors', 'Danh mục không tồn tại');
        }
        $manu = Manufacturers::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $manu->name = $request->input('name');
        if ($request->hasFile('image')) {
            $path = "images/manufacturers/" . $manu->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $manu->image = $imageName;
            $image->move(public_path('images/manufacturers/'), $imageName);
        }
        if ($manu->save()) {

            return redirect()->route('manufacture.table')->with('success', 'Cập nhật thành công');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
