<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;
use App\Models\Resource;
use Illuminate\Support\Facades\Response;
class UploadFileController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf,docx,doc|max:20000',
        ]);

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $path = Storage::disk('public')->put('uploads', $file);

        //storing in the database

        $uploadedFile = new File();
        $uploadedFile->name = $fileName;
        $uploadedFile->path = $path;
        $uploadedFile->save();

        return redirect('thank');
    }

    public function index2()
    {
        return view('thank');
    }

    public function show($id)
{
    $file = File::findOrFail($id);

    // You can pass $file to a view for display
    
    return view('file.show', compact('file'));
}

public function resources(Request $request){

    $resources = Resource::all();
    
    return view('resources', compact('resources'));
    
}
public function resourcesAmh(Request $request){

    $resources = Resource::all();
    
    return view('amh/resources', compact('resources'));
    
}

public function downloadR($id)
{
    $resource = Resource::findOrFail($id);

    $filePath = $resource->path;

    if (Storage::exists($filePath)) {
        return response()->download(storage_path('uploads/' . $filePath), $resource->name);
    } else {
        // Handle the case when the file does not exist
        return redirect('resources')->with('error', 'File not found');
    }
}
}