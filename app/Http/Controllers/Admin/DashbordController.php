<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ethnic;
use App\Models\Email;
use App\Models\File;
use App\Models\Post;
use App\Models\Subscribers;
use App\Models\Resource;
use App\Models\Admin_users;
use Illuminate\Support\Facades\Storage;

class DashbordController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $ethnics = Ethnic::paginate(5);
        $admins = Admin_users::all();
        return view('admin.ethnic', compact('ethnics','admins'));
        
    }

    public function insertEmail(){

        
        $admins = Admin_users::all();
        return view('email.insertEmail',compact('admins'));
        
    }
    public function testEmail(){

        $message = Email::all();
        $admins = Admin_users::all();
        return view('email.testMail', compact('message'));
        
    }
    public function post(){

        $posts = Post::latest()->paginate(7);
        $admins = Admin_users::all();
        return view('admin.post', compact('posts','admins'));
        
    }

    public function subscribers(){

        $subscribers = Subscribers::latest()->paginate(7);
        $admins = Admin_users::all();
        return view('admin.subscribers', compact('subscribers','admins'));
        
    }
    public function postEdit($id)
    {

        $posts = Post::where('id', $id)->first();
        $admins = Admin_users::all();
        return view('admin.postEdit', compact('posts','admins'));
    }


    public function ethnicEdit($id)
    {

        $ethnics = Ethnic::where('id', $id)->first();
        $admins = Admin_users::all();
        return view('admin.ethnicEdit', compact('ethnics','admins'));
    }

    public function roleUpdate(Request $request,$id){
        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension(); 
            $file->move('uploads', $filename);

            $admins = Admin_users::all();

        $ethnics = Ethnic::find($id);
        $ethnics->name = $request->input('name');
        $ethnics->nameAmh = $request->input('nameAmh');
        $ethnics->population = $request->input('population');
        $ethnics->language = $request->input('language');
        $ethnics->languageAmh = $request->input('languageAmh');
        $ethnics->christianity = $request->input('christianity');
        $ethnics->evangelicalNumber = $request->input('evangelicalNumber');
        $ethnics->description = $request->input('description');
        $ethnics->descriptionAmh = $request->input('descriptionAmh');
        $ethnics->image =$filename;
        $ethnics->created_at = $request->input('created_at');
        $ethnics->updated_at = $request->input('updated_at');
        $ethnics->deleted_at = $request->input('deleted_at');
    

        }else{

            $admins = Admin_users::all();

            $ethnics = Ethnic::find($id);
            $ethnics->name = $request->input('name');
            $ethnics->nameAmh = $request->input('nameAmh');
            $ethnics->population = $request->input('population');
            $ethnics->language = $request->input('language');
            $ethnics->languageAmh = $request->input('languageAmh');
            $ethnics->christianity = $request->input('christianity');
            $ethnics->evangelicalNumber = $request->input('evangelicalNumber');
            $ethnics->description = $request->input('description');
            $ethnics->descriptionAmh = $request->input('descriptionAmh');
            $ethnics->created_at = $request->input('created_at');
            $ethnics->updated_at = $request->input('updated_at');
            $ethnics->deleted_at = $request->input('deleted_at');
        



        }



        
        
        $ethnics->update();

        return redirect('/admin/ethnic')->with('status','Your data is updated');


    }

    public function postUpdate(Request $request,$id){
        if($request->hasfile('image')){
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension(); 
        $file->move('uploads', $filename);

        $admins = Admin_users::all();
      
        $posts = Post::find($id);
        $posts->title = $request->input('title');
        $posts->titleAmh = $request->input('titleAmh');
        $posts->excerpt = $request->input('excerpt');
        $posts->body = $request->input('body');
        $posts->bodyAmh = $request->input('bodyAmh');
        $posts->image =$filename;



        $posts->created_at = $request->input('created_at');
        $posts->updated_at = $request->input('updated_at');
        }else{

            $admins = Admin_users::all();
      
            $posts = Post::find($id);
            $posts->title = $request->input('title');
            $posts->titleAmh = $request->input('titleAmh');
            $posts->excerpt = $request->input('excerpt');
            $posts->body = $request->input('body');
            $posts->bodyAmh = $request->input('bodyAmh');
        
            $posts->created_at = $request->input('created_at');
            $posts->updated_at = $request->input('updated_at');

        }
       
        $posts->update();

        return redirect('/admin/post')->with('status','Your data is updated');


    }

    public function roleDelete($id){
        $ethnics = Ethnic::find($id);
        $ethnics->delete();
        return redirect('/admin/ethnic')->with('status','Your data is Deleted');


    }
    public function postDelete($id){
        $posts = Post::find($id);
        $posts->delete();
        return redirect('/admin/post')->with('status','Your data is Deleted');


    }
    public function rDelete($id){
        $resources = Resource::find($id);
        $resources->delete();
        return redirect('/admin/resources')->with('status','Your data is Deleted');


    }
    public function subscribersDelete($id){
        $subscribers = Subscribers::find($id);
        $subscribers->delete();
        return redirect('/admin/subscribers')->with('status','Your data is Deleted');


    }


    public function saveEthnic(Request $request)
    {
        
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension(); 
        $file->move('uploads', $filename);
    
        $ethnic = new Ethnic();
        $ethnic->name = $request->input('name');
        $ethnic->nameAmh = $request->input('nameAmh');
        $ethnic->population = $request->input('population');
        $ethnic->language = $request->input('language');
        $ethnic->languageAmh = $request->input('languageAmh');
        $ethnic->christianity = $request->input('christianity');
        $ethnic->evangelicalNumber = $request->input('evangelicalNumber');
        $ethnic->description = $request->input('description');
        $ethnic->descriptionAmh = $request->input('descriptionAmh');
        $ethnic->image =$filename;

        $ethnic->save();

        return redirect('/admin/ethnic')->with('status','Your data is Inserted');
        


    }
    public function savePost(Request $request)
    {
        
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension(); 
        $file->move('uploads', $filename);
    
        $post = new Post();
        $post->title = $request->input('title');
        $post->titleAmh = $request->input('titleAmh');
        $post->excerpt = $request->input('excerpt');
        $post->body = $request->input('body');
        $post->bodyAmh = $request->input('bodyAmh');
        $post->image =$filename;

        $post->save();

        return redirect('/admin/post')->with('status','Your data is Inserted');
        


    }

    public function updateEmail(Request $request)
    {
        $admins = Admin_users::all();
        $message = new Email();
        $message->message = $request->input('message');
        $message->save();
        return view('email.status', compact('message','admins'));
    }

    

    public function generateHtml()
    {
        // Get the data you want to display
        $admins = Admin_users::all();
        $subscribers = Subscribers::paginate(5);
        $message = Email::latest()->first()->message;

        // Render the HTML content
        $html = view('email.testMail', compact('message'))->render();

        // Save the HTML content to a file
        $filePath=resource_path('views/email/email.blade.php');

        file_put_contents($filePath,$html);

        return view('email.send',compact('subscribers','admins'));
    }

    public function uploads(Request $request){

        $files = File::all();
        $admins = Admin_users::all();
        return view('admin.upload', compact('files','admins'));
        
    }

    public function download($id)
{
    $file = File::findOrFail($id);

    // Get the storage disk instance
    $storage = Storage::disk('public');

    // Get the full file path
    $filePath = $storage->path($file->path);

    // Return a response to download the file
    return response()->download($filePath, $file->name);
}
public function download2($id)
{
    $file = Resource::findOrFail($id);

    // Get the storage disk instance
    $storage = Storage::disk('public');

    // Get the full file path
    $filePath = $storage->path($file->path);

    // Return a response to download the file
    return response()->download($filePath, $file->name);
}

public function resources(Request $request){

    $resources = Resource::all();
    $admins = Admin_users::all();
    return view('admin.resources', compact('resources','admins'));
    
}

public function saveResources(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf,docx,doc|max:20000',
        ]);

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $path = Storage::disk('public')->put('uploads', $file);

        //storing in the database

        $uploadedFile = new Resource();
        $uploadedFile->name = $fileName;
        $uploadedFile->path = $path;
        $uploadedFile->description = $request->input('description');
        $uploadedFile->save();

        return redirect('/admin/resources')->with('status','Your data is updated');
    }

}
