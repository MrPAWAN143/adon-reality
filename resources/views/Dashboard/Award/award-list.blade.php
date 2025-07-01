@extends('Dashboard.Layouts.app')

@section('metadata')
<title>Awards & Recognitions List</title>
@endsection

@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 bg-adminFormBg rounded-md">

            <!-- Header + Create -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-adminTextPrimary">Awards & Recognitions</h1>
                <a href="{{ route('award.create') }}"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    + New Award
                </a>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-adminInputBorder">
                    <thead class="bg-adminSidebar text-white text-sm">
                        <tr>
                            <th class="px-4 py-3 text-left font-semibold">#</th>
                            <th class="px-4 py-3 text-left font-semibold">Title</th>
                            <th class="px-4 py-3 text-left font-semibold">Slug</th>
                            <th class="px-4 py-3 text-left font-semibold">Type</th>
                            <th class="px-4 py-3 text-left font-semibold">By</th>
                            <th class="px-4 py-3 text-left font-semibold">Year</th>
                            <th class="px-4 py-3 text-left font-semibold">Featured</th>
                            <th class="px-4 py-3 text-left font-semibold">Status</th>
                            <th class="px-4 py-3 text-left font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-adminInputBorder text-sm">

                        <!-- Demo Row 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">1</td>
                            <td class="px-4 py-3 font-medium">Best Developer of the Year</td>
                            <td class="px-4 py-3">best-developer-of-the-year</td>
                            <td class="px-4 py-3 capitalize">Award</td>
                            <td class="px-4 py-3">CNBC</td>
                            <td class="px-4 py-3">2024</td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Yes</span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-4 py-3 space-x-2">
                                <a href="{{ route('award.edit') }}" class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-3 py-1 rounded text-xs">Edit</a>
                                <button type="button"
                                    onclick="alert('Confirm delete demo')"
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">
                                    Delete
                                </button>
                            </td>
                        </tr>

                        <!-- Demo Row 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">2</td>
                            <td class="px-4 py-3 font-medium">Green Building Certification</td>
                            <td class="px-4 py-3">green-building-certification</td>
                            <td class="px-4 py-3 capitalize">Certification</td>
                            <td class="px-4 py-3">CREDAI</td>
                            <td class="px-4 py-3">2023</td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-700">No</span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Active</span>
                            </td>
                            <td class="px-4 py-3 space-x-2">
                                <a href="#" class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-3 py-1 rounded text-xs">Edit</a>
                                <button type="button"
                                    onclick="alert('Confirm delete demo')"
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">
                                    Delete
                                </button>
                            </td>
                        </tr>

                        <!-- Demo Row 3 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">3</td>
                            <td class="px-4 py-3 font-medium">Top 10 Luxury Projects</td>
                            <td class="px-4 py-3">top-10-luxury-projects</td>
                            <td class="px-4 py-3 capitalize">Recognition</td>
                            <td class="px-4 py-3">Times Property</td>
                            <td class="px-4 py-3">2022</td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Yes</span>
                            </td>
                            <td class="px-4 py-3">
                                <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-700">Inactive</span>
                            </td>
                            <td class="px-4 py-3 space-x-2">
                                <a href="#" class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-3 py-1 rounded text-xs">Edit</a>
                                <button type="button"
                                    onclick="alert('Confirm delete demo')"
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">
                                    Delete
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>
@endsection