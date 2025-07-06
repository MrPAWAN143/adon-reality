<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PropertiesCategory;

use function Laravel\Prompts\error;

class PropertiesCategoryController extends Controller
{
    public function create()
    {
        return view('Dashboard.Projects.add-category');
    }

    public function categoryList()
    {
        // Fetch all categories
        $categories = PropertiesCategory::all();
        if($categories->isEmpty()) {
           $categories = [
                (object)[
                    'id' => 0,
                    'name' => 'No categories found',
                    'slug' => '',
                    'description' => '',
                    'is_active' => false,
                ]
           ];
        }
        return view('Dashboard.Projects.category-list', compact('categories'));
    }

    public function edit($id)
    {
        $category = PropertiesCategory::findOrFail($id);
        return view('Dashboard.Projects.edit-category', compact('category'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'description' => 'nullable|string',

        ]);

        $validated['slug'] = Str::slug(strtolower($validated['slug'])) ?: Str::slug(strtolower($validated['category_name']));

        // Create the category
        $category = new PropertiesCategory();
        $category->name = $validated['category_name'];
        $category->slug = $validated['slug'];
        $category->description = $validated['description'];
        $category->save();

        if (!$category) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create category',
                'category' => error($category)
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Category created successfully',
            'data' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        $category = PropertiesCategory::findOrFail($id);

        $validated = $request->validate([
            'category_name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $validated['slug'] = Str::slug(strtolower($validated['slug'])) ?: Str::slug(strtolower($validated['category_name']));

        // Update the category
        $category->name = $validated['category_name'];
        $category->slug = $validated['slug'];
        $category->description = $validated['description'];
        $category->save();

        if (!$category) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update category',
                'category' => error($category)
            ]);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Category updated successfully',
            'data' => $category
        ]);
    }

    public function destroy($id)
    {
        $category = PropertiesCategory::findOrFail($id);
        $category->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Category deleted successfully',
        ]);
    }

    public function toggleStatus($id)
    {
        $category = PropertiesCategory::findOrFail($id);
        $category->is_active = !$category->is_active; // Toggle status
        $category->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Category status updated successfully',
            'data' => $category
        ]);
    }
}
