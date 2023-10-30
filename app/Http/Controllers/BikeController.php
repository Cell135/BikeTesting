<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bikes = Bike::all(); 
        return view('bikes.index', compact('bikes'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        return view('bikes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
    
        if ($request->has('image_url')) {
            // Download the image from the URL
            $imageUrl = $request->input('image_url');
            $imageContents = file_get_contents($imageUrl);
    
            // Generate a unique filename for the downloaded image
            $imageName = 'image_' . time() . '.jpg';
    
            // Save the downloaded image to the storage/app/public/images directory
            file_put_contents(storage_path('app/public/images/' . $imageName), $imageContents);
    
            // Update the $data array with the saved image path
            $data['image'] = 'images/' . $imageName;
        }
    
        // Create the bike record with the updated data
        Bike::create($data);
    
        return redirect()->route('bikes.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $bike = Bike::find($id);
        return view('bikes.show', compact('bike'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $bike = Bike::find($id);
        return view('bikes.edit', compact('bike'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $bike = Bike::find($id);
        $bike->update($request->all());
        return redirect()->route('bikes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $bike = Bike::find($id);
        $bike->delete();
        return redirect()->route('bikes.index');
    }

    //Search
    public function search(Request $request)
    {
        $bikes = Bike::where('model', 'like', '%' . $request->search . '%')->get();
        return view('bikes.index', compact('bikes'));
    }
}