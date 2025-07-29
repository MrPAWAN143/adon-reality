@extends('Dashboard.layouts.app')

@section('metadata')
<title>Team Members List</title>

<style>
    .forBorder {
        border-color: #49717B !important
    }
</style>
@endsection



@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl xl:max-w-full">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 bg-adminFormBg rounded-md">

            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-adminTextPrimary">Job Applications</h1>

            </div>

            <!-- Table -->
            <div class="overflow-x-auto bg-white shadow rounded-lg">
                <table class="min-w-full divide-y divide-adminInputBorder">
                    <thead class="bg-adminSidebar text-white text-sm">
                        <tr class="text-left">
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Name / Email</th>
                            <th class="px-4 py-3">Phone</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Job Title</th>
                            <th class="px-4 py-3">CV</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-adminInputBorder text-sm">
                        @php
                        $count = 1;
                        @endphp
                        @foreach ($appliedJobs as $job)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $count }}</td>
                            <td class="px-4 py-3">{{ $job->applicant_name }}</td>
                            <td class="px-4 py-3">{{ $job->applicant_phone }}</td>
                            <td class="px-4 py-3">{{ $job->applicant_email }}</td>
                            <td class="px-4 py-3">{{ $job->job_title }}</td>
                            <td class="px-4 py-3">
                                @if ($job->resume)
                                <a href="{{ asset($job->resume) }}" target="_blank" class="text-blue-500 hover:underline">
                                    View CV
                                </a>
                                @else
                                <span class="text-gray-400 italic">No Resume</span>
                                @endif
                            </td>
                        </tr>

                        @php
                        $count++;
                        @endphp
                        @endforeach
                        @if ($appliedJobs->isEmpty())
                        <tr>
                            <td colspan="5" class="px-4 py-3 text-center text-gray-500">No job applications found.</td>
                        </tr>
                        @endif
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>


@endsection



@section('scripts')

@endsection