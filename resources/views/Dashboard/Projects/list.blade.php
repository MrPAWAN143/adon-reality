@extends('Dashboard.layouts.app')

@section('metadata')
<title>Projects List</title>
@endsection

@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 bg-adminFormBg rounded-md">

            <!-- Header + “Create” -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-adminTextPrimary">Project List</h1>
                <a href="{{ route('projects.create') }}"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    + New Project
                </a>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto bg-adminFormBg shadow rounded-lg">
                <table class="min-w-full divide-y divide-adminInputBorder">
                    <thead class="bg-adminSidebar text-white text-sm">
                        <tr>
                            <th class="px-4 py-3 text-left font-semibold">#</th>
                            <th class="px-4 py-3 text-left font-semibold">Name</th>
                            <th class="px-4 py-3 text-left font-semibold">Slug</th>
                            <th class="px-4 py-3 text-left font-semibold">Category</th>
                            <th class="px-4 py-3 text-left font-semibold">Developer</th>
                            <th class="px-4 py-3 text-left font-semibold">Pro Status</th>
                            <th class="px-4 py-3 text-left font-semibold">Status</th> <!-- 👈 NEW -->
                            <th class="px-4 py-3 text-left font-semibold">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-adminInputBorder text-sm">

                        <!-- Demo row 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">1</td>
                            <td class="px-4 py-3 font-medium">Sky Residences</td>
                            <td class="px-4 py-3">sky-residences</td>
                            <td class="px-4 py-3">Residential</td>
                            <td class="px-4 py-3">Sunshine Group</td>
                            <td class="px-4 py-3">
                                <span class="inline-block px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 cursor-pointer">
                                    Available
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="inline-block px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                            </td>

                            <td class="px-4 py-3 space-x-2">
                                <a href="#" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded text-xs">View</a>
                                <a href="{{ route('projects.edit', 1) }}" class="inline-block bg-adminPrimary hover:bg-adminPrimaryHover text-white px-3 py-1 rounded text-xs">Edit</a>
                                <button type="button" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs"
                                    onclick="alert('Delete demo row');">Delete</button>
                            </td>
                        </tr>

                        <!-- Demo row 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">2</td>
                            <td class="px-4 py-3 font-medium">Evergreen Heights</td>
                            <td class="px-4 py-3">evergreen-heights</td>
                            <td class="px-4 py-3">Residential</td>
                            <td class="px-4 py-3">Evergreen Builders</td>
                            <td class="px-4 py-3">
                                <span class="inline-block px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">
                                    Under Dev
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="inline-block px-2 py-1 text-xs rounded-full bg-red-100 text-red-700">
                                    Inactive
                                </span>
                            </td>

                            <td class="px-4 py-3 space-x-2">
                                <a href="#" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded text-xs">View</a>
                                <a href="#" class="inline-block bg-adminPrimary hover:bg-adminPrimaryHover text-white px-3 py-1 rounded text-xs">Edit</a>
                                <button type="button" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs"
                                    onclick="alert('Delete demo row');">Delete</button>
                            </td>
                        </tr>

                        <!-- Demo row 3 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">3</td>
                            <td class="px-4 py-3 font-medium">Crest Towers</td>
                            <td class="px-4 py-3">crest-towers</td>
                            <td class="px-4 py-3">Commercial</td>
                            <td class="px-4 py-3">Skyline Developers</td>
                            <td class="px-4 py-3">
                                <span class="inline-block px-2 py-1 text-xs rounded-full bg-red-100 text-red-700">
                                    Sold
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="inline-block px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">
                                    Active
                                </span>
                            </td>

                            <td class="px-4 py-3 space-x-2">
                                <a href="#" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded text-xs">View</a>
                                <a href="#" class="inline-block bg-adminPrimary hover:bg-adminPrimaryHover text-white px-3 py-1 rounded text-xs">Edit</a>
                                <button type="button" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs"
                                    onclick="alert('Delete demo row');">Delete</button>
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