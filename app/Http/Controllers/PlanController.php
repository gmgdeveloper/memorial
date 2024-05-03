<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plan;

use Illuminate\Http\JsonResponse;
class PlanController extends Controller
{
    //


    public function getPlans()
    {
        $plans = Plan::latest()->get(); // Retrieve the latest plans and execute the query with `get()`

        return view('admin.plan.show', compact('plans'));
    }
    

 public function add_plan(){

    return view('admin.plan.add_plan');
 }


 public function save_plan(Request $request)
 {

      
     // Validate the incoming request data
     $validatedData = $request->validate([
         'price' => 'required',
         'duration' => 'required|string', // Assuming 'duration' should be a date
         'end_date' => 'required|date', // Assuming 'end_date' should be a date
         'features' => 'required',
         'description' => 'required',
     ]);


 
     // Create a new Plan instance with the validated data
     $plan = new Plan();
     $plan->price = $validatedData['price'];
     $plan->duration = $validatedData['duration'];
     $plan->end_date = $validatedData['end_date']; // Assign 'end_date' to the plan instance
     $plan->features = $validatedData['features'];
     $plan->description = $validatedData['description'];
 
     // Save the plan to the database
     $plan->save();


 
     // Redirect back to the page with a success message
     return redirect()->route('admin.plans')->with('success', 'Plan created successfully');
 }

 public function edit_plan($id)
 {
     $plan = Plan::find($id);
     return view('admin.plan.edit_plan')->with('plan', $plan);
 }


 public function update_plan(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'price' => 'required',
            'duration' => 'required|string',
            'end_date' => 'required|date',
            'features' => 'required',
            'description' => 'required',
        ]);

        // Find the plan by ID
        $plan = Plan::findOrFail($id);

        // Update the plan with the validated data
        $plan->update([
            'price' => $validatedData['price'],
            'duration' => $validatedData['duration'],
            'end_date' => $validatedData['end_date'],
            'features' => $validatedData['features'],
            'description' => $validatedData['description'],
        ]);

        // Redirect back to the page with a success message
        return redirect()->route('admin.plans')->with('success', 'Plan updated successfully');
    }


    public function delete_plan($id)
    {
        // Find the plan by its ID
        $plan = Plan::find($id);
    
        // Check if the plan exists
        if ($plan) {
            // If the plan exists, delete it
            $plan->delete();
            // Return a JSON response with success message
            return response()->json(['message' => 'Plan deleted successfully'], 200);
        } else {
            // If the plan doesn't exist, return a JSON response with error message
            return response()->json(['message' => 'Plan not found'], 404);
        }
    }
    
    

 

}
