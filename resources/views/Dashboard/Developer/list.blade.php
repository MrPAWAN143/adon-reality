@extends('Dashboard.layouts.app')

@section('metadata')
<title>Developers</title>
@endsection



@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl">
    <div class="my-5">
        <div class="mx-auto py-6 px-8  bg-adminFormBg rounded-md">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-adminTextPrimary">Developer List</h1>
                <a href="{{route('development-partners.create')}}"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    + New Developer
                </a>
            </div>

            <div class="overflow-x-auto bg-adminFormBg shadow rounded-lg">
                <table class="min-w-full divide-y divide-adminInputBorder">
                    <thead class="bg-adminSidebar text-white text-sm">
                        <tr>
                            <th class="px-4 py-3 text-left font-semibold">#</th>
                            <th class="px-4 py-3 text-left font-semibold">Name</th>
                            <th class="px-4 py-3 text-left font-semibold">Slug</th>
                            <th class="px-4 py-3 text-left font-semibold">Founded&nbsp;In</th>
                            <th class="px-4 py-3 text-left font-semibold">Ongoing&nbsp;Projects</th>
                            <th class="px-4 py-3 text-left font-semibold">Status</th> <!-- 👈 NEW -->
                            <th class="px-4 py-3 text-left font-semibold">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-adminInputBorder text-sm">
                        <!-- Demo row 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">1</td>
                            <td class="px-4 py-3 font-medium">Sunshine Group</td>
                            <td class="px-4 py-3">sunshine-group</td>
                            <td class="px-4 py-3">2005</td>
                            <td class="px-4 py-3">12</td>

                            <!-- Status badge -->
                            <td class="px-4 py-3">
                                <span class="inline-block px-2 py-1 text-xs rounded-full bg-green-100 text-green-800 cursor-pointer">
                                    Active
                                </span>
                            </td>

                            <!-- Actions -->
                            <td class="px-4 py-3 space-x-2">
                                <a href="#" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded text-xs">View</a>
                                <a href="{{ route('development-partners.edit') }}" class="inline-block bg-adminPrimary hover:bg-adminPrimaryHover text-white px-3 py-1 rounded text-xs">Edit</a>
                                <button type="button" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs"
                                    onclick="alert('Delete demo row');">Delete</button>
                            </td>
                        </tr>

                        <!-- Demo row 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">2</td>
                            <td class="px-4 py-3 font-medium">Evergreen Builders</td>
                            <td class="px-4 py-3">evergreen-builders</td>
                            <td class="px-4 py-3">1998</td>
                            <td class="px-4 py-3">8</td>
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
                            <td class="px-4 py-3 font-medium">Skyline Developers</td>
                            <td class="px-4 py-3">skyline-dev</td>
                            <td class="px-4 py-3">2012</td>
                            <td class="px-4 py-3">5</td>
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