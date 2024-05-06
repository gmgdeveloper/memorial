<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function display_categories()
    {
        // Retrieve all categories from the database
        $categories = Category::all();
        
        // Pass the retrieved categories to the view for display
        return view('admin.categories.index', compact('categories'));
    }



    public function create_category(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'category_name' => 'required|string|max:255|unique:categories', // Ensure category_name field is unique in the 'categories' table
        ]);
    
        // Create a new Category instance
        $category = new Category();
        $category->category_name = $request->input('category_name');
    
        // Save the category to the database
        try {
            $category->save();
        } catch (\Illuminate\Database\QueryException $e) {
            // If there's a duplicate entry exception, handle it
            if ($e->errorInfo[1] == 1062) { // Error code 1062 for duplicate entry
                return redirect()->back()->withInput()->with('error', 'Category name already exists.');
            }
            // Otherwise, rethrow the exception
            throw $e;
        }
    
        // Redirect back to the form with a success message
        return redirect()->route('admin.categories')->with('success', 'Category created successfully.');
    }
    

    

    public function display($id){

        $category  = Category::find($id);
        if(!empty($category)){
            return view('admin.categories.edit_category',compact('category'));
        }
        else{
            return redirect()->back();
        }



    }


     







    public function update_category(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'category_name' => 'required|string|max:255', // Validate category_name field
        ]);
    
        // Check if the category with the given ID exists
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('admin.categories')->with('error', 'Category not found.');
        }
    
        // Check if the category name is already taken by another category (excluding the current one)
        $existingCategory = Category::where('category_name', $request->input('category_name'))
                                    ->where('id', '!=', $id)
                                    ->first();
        if ($existingCategory) {
            return redirect()->back()->withInput()->with('error', 'Category name already exists.');
        }
    
        // Update the category with the new name
        $category->category_name = $request->input('category_name');
        $category->save();
    
        // Redirect back to the form with a success message
        return redirect()->route('admin.categories')->with('success', 'Category updated successfully.');
    }




   
public function delete_category($id)
{
    // Find the category by its ID
    $category = Category::find($id);

    // If the category doesn't exist, return a JSON response with an error message
    if (!$category) {
        return response()->json(['error' => 'Category not found.'], 404);
    }

    // Delete the category
    $category->delete();

    // Return a JSON response with a success message
    return response()->json(['message' => 'Category deleted successfully.']);
}
    


}
