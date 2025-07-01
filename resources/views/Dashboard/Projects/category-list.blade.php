@extends('Dashboard.layouts.app')

@section('metadata')
<title>Category List</title>
@endsection

@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 bg-adminFormBg rounded-md">

            <!-- Header + “Create” -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-adminTextPrimary">Category List</h1>
                <a href="{{ route('categories.create') }}"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    + New Category
                </a>
            </div>

          <div class="overflow-x-auto bg-adminFormBg shadow rounded-lg">
    <table class="min-w-full divide-y divide-adminInputBorder">
        <thead class="bg-adminSidebar text-white text-sm">
            <tr>
                <th class="px-4 py-3 text-left font-semibold w-12">#</th>
                <th class="px-4 py-3 text-left font-semibold">Name</th>
                <th class="px-4 py-3 text-left font-semibold">Slug</th>
                <th class="px-4 py-3 text-left font-semibold">Active</th>
                <th class="px-4 py-3 text-left font-semibold w-52">Actions</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-adminInputBorder text-sm">
            <!-- Row 1 -->
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3">1</td>
                <td class="px-4 py-3 font-medium">
                    Residential
                    <p class="text-xs text-gray-500">All types of homes and flats for living...</p>
                </td>
                <td class="px-4 py-3">residential</td>
                <td class="px-4 py-3">
                    <span class="inline-block px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">
                        Active
                    </span>
                </td>
                <td class="px-4 py-3 space-x-2">
                    <a href="#" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded text-xs">View</a>
                    <a href="{{ route('categories.edit') }}" class="inline-block bg-adminPrimary hover:bg-adminPrimaryHover text-white px-3 py-1 rounded text-xs">Edit</a>
                    <button type="button" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Delete</button>
                </td>
            </tr>

            <!-- Row 2 -->
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3">2</td>
                <td class="px-4 py-3 font-medium">
                    Commercial
                    <p class="text-xs text-gray-500">Shops, offices, and workspaces for businesses</p>
                </td>
                <td class="px-4 py-3">commercial</td>
                <td class="px-4 py-3">
                    <span class="inline-block px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">
                        Active
                    </span>
                </td>
                <td class="px-4 py-3 space-x-2">
                    <a href="#" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded text-xs">View</a>
                    <a href="#" class="inline-block bg-adminPrimary hover:bg-adminPrimaryHover text-white px-3 py-1 rounded text-xs">Edit</a>
                    <button type="button" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Delete</button>
                </td>
            </tr>

            <!-- Row 3 -->
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-3">3</td>
                <td class="px-4 py-3 font-medium">
                    Plots
                    <p class="text-xs text-gray-500">Empty land parcels suitable for construction</p>
                </td>
                <td class="px-4 py-3">plots</td>
                <td class="px-4 py-3">
                    <span class="inline-block px-2 py-1 text-xs rounded-full bg-red-100 text-red-700">
                        Inactive
                    </span>
                </td>
                <td class="px-4 py-3 space-x-2">
                    <a href="#" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded text-xs">View</a>
                    <a href="#" class="inline-block bg-adminPrimary hover:bg-adminPrimaryHover text-white px-3 py-1 rounded text-xs">Edit</a>
                    <button type="button" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    // Custom JavaScript for this page
</script>
@endsection