<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dogs = Dog::paginate(12);

        return response()->json($dogs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'breed' => 'required|max:255',
                'size' => 'required|max:255',
                'color' => 'required|max:255',
                'image' => 'required|image',
            ],
            [
                'breed.required' => 'Breed is required.',
                'size.required' => 'Size is required.',
                'color.required' => 'Color is required.',
                'image.required' => 'Image is required.',
                'image.image' => 'Image must be a valid image.',
            ]
        );

        $dog = new Dog();
        $dog->breed = $request->breed;
        $dog->size = $request->size;
        $dog->color = $request->color;

        $fileName = time().'.'.$request->image->extension();
        $request->image->move(public_path('storage/images'), $fileName);

        $dog->img = $fileName;

        $dog->save();

        return back()->with('success', 'Dog stored successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dog = Dog::find($id);

        return response()->json($dog);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dog = Dog::find($id);

        $fileRoute = public_path('storage/images/'.$dog->img);
        Storage::disk('public')->delete($fileRoute);

        $dog->delete();

        return back()->with('success', 'Dog deleted successfully!');
    }
}
