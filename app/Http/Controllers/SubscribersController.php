<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Subscribers;

class SubscribersController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255',
            'location' => 'required|string|min:3|max:255',
            // Add validation rules for other fields
        ]);
        $data = $request->input();

        // Create a new instance of your model and fill it with the validated data
        try{
        $member = new Subscribers;
        $member->name = $data['name'];
        $member->email = $data['email'];
        $member->location = $data['location'];
        // Set values for other fields as needed

        // Save the record to the database
        $member->save();

        // Redirect or return a response as needed
        return redirect('blog')->with('status',"Subscribed  successfully");
        }
        catch(Exception $e){
                    return redirect('blog')->with('failed',"Subscribtion failed");
                 }
    }
    
    // public function save(Request $request){
    //     $rules = [
    //      'name' => 'required|string|min:3|max:255',
    //      'email' => 'required|string|email|max:255',
    //      'location' => 'required|string|min:3|max:255',
        
         
    //   ];
    //   $validator = Validator::make($request->all(),$rules);
    //   if ($validator->fails()) {
    //      return redirect('home')
    //      ->withInput()
    //      ->withErrors($validator);
    //   }
    //   else{
    //         $data = $request->input();
    //      try{
    //         $member = new SubscribersController;
    //             $member->name = $data['name'];
    //             $member->email = $data['email'];
    //             $member->location = $data['location'];
    //         $member->save();
    //         return redirect('home')->with('status',"Insert successfully");
    //      }
    //      catch(Exception $e){
    //         return redirect('home')->with('failed',"operation failed");
    //      }
    //   }
    // }
}