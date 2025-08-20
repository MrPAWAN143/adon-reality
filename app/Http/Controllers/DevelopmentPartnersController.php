<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\PropertiesDetails; // Assuming you have a model named PropertiesDetails
use App\Models\DevelopmentPartners; // Assuming you have a model named DevelopmentPartner

class DevelopmentPartnersController extends Controller
{
    public function index()
    {
        $developmentPartner = DevelopmentPartners::where('is_active', 1)
            ->orderBy('created_at', 'asc')->get();
        $testimonials = Testimony::where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('Pages.developer-partner-page', compact('developmentPartner', 'testimonials'));
    }


     public function filter(Request $request)
    {
        $query = PropertiesDetails::with('category', 'developmentPartner');
        // Location filter
        if ($request->filled('location')) {
            $query->where('property_city', $request->location);
        }

        // Project filter
        if ($request->filled('project')) {
            $query->whereHas('developmentPartner', function ($q) use ($request) {
                $q->where('developer_name', $request->project);
            });
        }

        // Status filter
        if ($request->filled('status')) {
            $query->where('property_status', $request->status);
        }

        // Helper: Convert price strings into numeric value in Lakhs
        function normalizePriceToLacks($price)
        {
            $price = trim(strtolower($price));

            if (strpos($price, 'cr') !== false) {
                // Handle Crores (1 Cr = 100 Lakhs)
                $num = floatval(str_replace(['cr', ' '], '', $price));
                return $num * 100;
            } elseif (strpos($price, 'lacks') !== false || strpos($price, 'lakhs') !== false) {
                // Handle Lacks/Lakhs
                $num = floatval(str_replace(['lacks', 'lakhs', ' '], '', $price));
                return $num;
            }

            return (float) $price; // fallback if plain number
        }

        // Common SQL expression for filtering
        $priceExpression = "
    CAST(
        CASE 
            WHEN starting_price LIKE '%Cr%' 
                THEN REPLACE(REPLACE(starting_price, 'Cr', ''), ' ', '') * 100
            WHEN starting_price LIKE '%Lacks%' OR starting_price LIKE '%Lakhs%' 
                THEN REPLACE(REPLACE(REPLACE(starting_price, 'Lakhs', ''), 'Lacks', ''), ' ', '')
            ELSE starting_price
        END
    AS DECIMAL(10,2)
)";

        if ($request->filled('budget')) {
            $budget = $request->budget;

            switch ($budget) {
                case 'Below 20 Lacks':
                    $query->whereRaw("$priceExpression < 20");
                    break;

                case '20 Lacks - 40 Lacks':
                    $query->whereRaw("$priceExpression BETWEEN 20 AND 40");
                    break;

                case '40 Lacks - 60 Lacks':
                    $query->whereRaw("$priceExpression BETWEEN 40 AND 60");
                    break;

                case '60 Lacks - 80 Lacks':
                    $query->whereRaw("$priceExpression BETWEEN 60 AND 80");
                    break;

                case '80 Lacks - 1 Cr':
                    $query->whereRaw("$priceExpression BETWEEN 80 AND 100");
                    break;

                case '1 Cr - 1.5 Cr':
                    $query->whereRaw("$priceExpression BETWEEN 100 AND 150");
                    break;

                case '1.5 Cr - 2 Cr':
                    $query->whereRaw("$priceExpression BETWEEN 150 AND 200");
                    break;
                case '2 Cr - 5 Cr':
                    $query->whereRaw("$priceExpression BETWEEN 200 AND 500");
                    break;

                case '5 Cr +':
                    $query->whereRaw("$priceExpression > 500");
                    break;
            }
        }

        // Search filter
        if ($request->filled('search')) {
            $search = '%' . $request->search . '%';
            $query->where(function ($q) use ($search) {
                $q->where('property_name', 'like', $search)
                    ->orWhere('property_city', 'like', $search);
                $q->orWhereHas('developmentPartner', function ($q) use ($search) {
                    $q->where('developer_name', 'like', $search);
                });
            });
        }

        $properties = $query->orderBy('created_at', 'desc')->get();

        // Render only the property cards
        $html = view('Pages.projects.filtered-properties', compact('properties'))->render();

        return response()->json(['html' => $html]);
    }



    public function show(Request $request, $slug)
    {
     
        $developmentPartner = DevelopmentPartners::where('slug', $slug)->firstOrFail();
        $properties = PropertiesDetails::where('development_partner_id' , $developmentPartner->id)
            ->where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        $primeLocation = PropertiesDetails::where('development_partner_id', $developmentPartner->id)
            ->where('is_active', 1)
            ->where('property_type', 'Prime')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('Pages.developer-each', compact('developmentPartner', 'properties', 'primeLocation'));
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
