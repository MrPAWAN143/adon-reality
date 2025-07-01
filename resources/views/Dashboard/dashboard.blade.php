@extends('Dashboard.layouts.app')
@section('metadata')
<title>Dashboard</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@endsection

@section('content')
<div class="container my-4 mx-auto max-w-6xl">
    <div class="my-5">
        <div class="mx-auto py-6 px-4 sm:px-12 bg-adminFormBg rounded-md">

            <!-- Page Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-adminTextPrimary">Dashboard Overview</h1>
                <p class="text-sm text-gray-500">Here's what's happening today 👋</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <div class="bg-gradient-to-r from-green-100 to-green-200 p-5 rounded-xl shadow hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-green-500 text-white p-3 rounded-full">
                            <i class="fas fa-building"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-700">Total Projects</p>
                            <p class="text-xl font-bold text-green-900">128</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-blue-100 to-blue-200 p-5 rounded-xl shadow hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-blue-500 text-white p-3 rounded-full">
                            <i class="fas fa-blog"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-700">Blog Posts</p>
                            <p class="text-xl font-bold text-blue-900">24</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-purple-100 to-purple-200 p-5 rounded-xl shadow hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-purple-500 text-white p-3 rounded-full">
                            <i class="fas fa-photo-video"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-700">Event Media</p>
                            <p class="text-xl font-bold text-purple-900">12</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-yellow-100 to-yellow-200 p-5 rounded-xl shadow hover:shadow-lg transition">
                    <div class="flex items-center space-x-4">
                        <div class="bg-yellow-500 text-white p-3 rounded-full">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-700">Awards</p>
                            <p class="text-xl font-bold text-yellow-900">6</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions & Recent Activity -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Quick Actions -->
                <div class="bg-white rounded-xl border border-adminInputBorder shadow">
                    <div class="border-b px-5 py-4 font-semibold text-adminTextPrimary text-lg">Quick Actions</div>
                    <div class="p-5 grid gap-4">
                        <a href="{{ route('projects.create') }}" class="flex items-center space-x-3 hover:text-adminPrimary">
                            <i class="fas fa-plus-circle text-adminPrimary w-5"></i>
                            <span>Create New Project</span>
                        </a>
                        <a href="{{ route('blog.create') }}" class="flex items-center space-x-3 hover:text-adminPrimary">
                            <i class="fas fa-pen text-adminPrimary w-5"></i>
                            <span>Write Blog Post</span>
                        </a>
                        <a href="{{ route('event.create') }}" class="flex items-center space-x-3 hover:text-adminPrimary">
                            <i class="fas fa-upload text-adminPrimary w-5"></i>
                            <span>Upload Event Media</span>
                        </a>
                        <a href="{{ route('award.create') }}" class="flex items-center space-x-3 hover:text-adminPrimary">
                            <i class="fas fa-medal text-adminPrimary w-5"></i>
                            <span>Add New Award</span>
                        </a>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white rounded-xl border border-adminInputBorder shadow">
                    <div class="border-b px-5 py-4 font-semibold text-adminTextPrimary text-lg">Recent Activities</div>
                    <ul class="divide-y text-sm text-gray-700">
                        <li class="px-5 py-3 flex justify-between">
                            <span>New project <strong>Skyline Heights</strong> created</span>
                            <span class="text-xs text-gray-400">2 hrs ago</span>
                        </li>
                        <li class="px-5 py-3 flex justify-between">
                            <span>Blog <strong>“Top 5 Investment Areas”</strong> published</span>
                            <span class="text-xs text-gray-400">1 day ago</span>
                        </li>
                        <li class="px-5 py-3 flex justify-between">
                            <span>Media <strong>“Launch Ceremony”</strong> uploaded</span>
                            <span class="text-xs text-gray-400">3 days ago</span>
                        </li>
                        <li class="px-5 py-3 flex justify-between">
                            <span>Added new award <strong>“Best Realty 2025”</strong></span>
                            <span class="text-xs text-gray-400">4 days ago</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection