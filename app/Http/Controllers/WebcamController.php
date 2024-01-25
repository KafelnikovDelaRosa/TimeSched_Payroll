<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebcamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'image' => 'required',
        ],
        [
            'image.required' => 'Please capture an image',
        ]);

        $img = $request->image;
        $folderPath = "attendance/";
        $image_parts = explode(";base64,", $img);
        $image_base64 = base64_decode($image_parts[1]);
        $dateTime = Carbon::now("Asia/Manila");
        
        $fileName = $request->employee . ' ' . $request->activity  . ' '. $dateTime . '.png';

        // Replace whitespaces with underscore to make the file name more readable 
        $fileName = str_replace(' ', '_', $fileName);
        $file = $folderPath . $fileName;

        // Store image in the storage
        Storage::disk('local')->put($file, $image_base64);
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
        //
    }
}
