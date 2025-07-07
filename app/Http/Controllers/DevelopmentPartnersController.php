<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\DevelopmentPartners; // Assuming you have a model named DevelopmentPartner

class DevelopmentPartnersController extends Controller
{
    public function index()
    {
        $developmentPartner = DevelopmentPartners::all();
        return view('Pages.developer-partner-page', compact('developmentPartner'));
    }

    public function show($slug)
    {
        $developmentPartner = DevelopmentPartners::where('slug', $slug)->firstOrFail();
        return view('Pages.developer-each', compact('developmentPartner'));
    }

    public function create()
    {
        return view('Dashboard.Developer.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'developer_name'       => 'required|string|max:255',
            'slug'                 => 'nullable|string|unique:development_partners,slug',
            'tags'                 => 'nullable|string',
            'total_completed_area' => 'nullable|string',
            'ongoing_projects'     => 'nullable|string',
            'founded_in'     => 'nullable|integer|min:1950|max:' . date('Y'),
            'group_owners'         => 'required|string',
            'office_address'       => 'nullable|string',
            'official_website'    => 'nullable|string|max:255',
            'operating_cities'     => 'nullable|array',
            'total_projects'       => 'nullable|string',
            'developer_description' => 'nullable|string',
            'logo'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',

        ]);

        $validated['slug'] = Str::slug(strtolower($validated['slug'])) ?: Str::slug(strtolower($validated['developer_name']));

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/DeveloperLogos', $filename);
            $validated['logo'] = 'uploads/DeveloperLogos/' . $filename;
        } else {
            $validated['logo'] = null; // Set to null if no file is uploaded
        }

        $developmentPartner = DevelopmentPartners::create([
            'developer_name' => $validated['developer_name'],
            'slug' => $validated['slug'],
            'tags' => $validated['tags'],
            'total_completed_area' => $validated['total_completed_area'],
            'ongoing_projects' => $validated['ongoing_projects'],
            'founded_in' => $validated['founded_in'],
            'group_owners' => $validated['group_owners'],
            'office_address' => $validated['office_address'],
            'official_website' => $validated['official_website'],
            'operating_cities' => $validated['operating_cities'],
            'total_projects' => $validated['total_projects'],
            'developer_description' => $validated['developer_description'],
            'logo' => $validated['logo']
        ]);


        if (!$developmentPartner) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create development partner'
            ], 500);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Development partner created successfully',
            'data' => $developmentPartner
        ]);
    }

    public function update(Request $request, $id)
    {
        $developmentPartner = DevelopmentPartners::findOrFail($id);

        $validated = $request->validate([
            'developer_name'       => 'required|string|max:255',
            'slug'                 => 'nullable|string|unique:development_partners,slug,' . $id,
            'tags'                 => 'nullable|string',
            'total_completed_area' => 'nullable|string',
            'ongoing_projects'     => 'nullable|string',
            'founded_in'           => 'nullable|integer|min:1950|max:' . date('Y'),
            'group_owners'         => 'required|string',
            'office_address'       => 'nullable|string',
            'official_website'     => 'nullable|string|max:255',
            'operating_cities'     => 'nullable|array',
            'total_projects'       => 'nullable|string',
            'developer_description' => 'nullable|string',
            'logo'                 => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $validated['slug'] = Str::slug(strtolower($validated['slug'])) ?: Str::slug(strtolower($validated['developer_name']));

        if ($request->hasFile('logo')) {
            // Delete the old logo if it exists
            if ($developmentPartner->logo && file_exists($developmentPartner->logo)) {
                unlink($developmentPartner->logo);
            }

            $image = $request->file('logo');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/DeveloperLogos', $filename);
            $validated['logo'] = 'uploads/DeveloperLogos/' . $filename;
        } else {
            // Keep the old logo if no new file is uploaded
            $validated['logo'] = $developmentPartner->logo;
        }

        $developmentPartner->update([
            'developer_name' => $validated['developer_name'],
            'slug' => $validated['slug'],
            'tags' => $validated['tags'],
            'total_completed_area' => $validated['total_completed_area'],
            'ongoing_projects' => $validated['ongoing_projects'],
            'founded_in' => $validated['founded_in'],
            'group_owners' => $validated['group_owners'],
            'office_address' => $validated['office_address'],
            'official_website' => $validated['official_website'],
            'operating_cities' => $validated['operating_cities'],
            'total_projects' => $validated['total_projects'],
            'developer_description' => $validated['developer_description'],
            'logo' => $validated['logo']
        ]);
        if (!$developmentPartner) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update development partner'
            ], 500);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Development partner updated successfully',
            'data' => $developmentPartner
        ]);
    }

    public function destroy($id)
    {
        $developmentPartner = DevelopmentPartners::findOrFail($id);

        // Delete the logo file if it exists
        if ($developmentPartner->logo && file_exists($developmentPartner->logo)) {
            unlink($developmentPartner->logo);
        }

        $developmentPartner->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Development partner deleted successfully'
        ]);
    }


    public function toggleStatus($id)
    {
        $partner = DevelopmentPartners::findOrFail($id);
        $partner->is_active = !$partner->is_active;
        $partner->save();

        return response()->json([
            'status'       => $partner->is_active,                               // 1 or 0
            'text'         => $partner->is_active ? 'Active'   : 'Inactive',
            'classes'      => $partner->is_active
                ? 'bg-green-100 text-green-800'
                : 'bg-red-100  text-red-700',
        ]);
    }


    public function developerPartnerList()
    {
        $developmentPartners = DevelopmentPartners::all();
        return view('Dashboard.Developer.list', compact('developmentPartners'));
    }
    public function edit($id)
    {
        $developmentPartner = DevelopmentPartners::findOrFail($id);
        return view('Dashboard.Developer.edit', compact('developmentPartner'));
    }
}
