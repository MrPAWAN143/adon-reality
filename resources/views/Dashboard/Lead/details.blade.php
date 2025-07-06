@extends('Dashboard.Layouts.app')

@section('metadata')
<title>Lead Details </title>
@endsection

@section('content')

<div class="container my-6 mt-4 mx-auto max-w-5xl">

    <a href="#" onclick="history.back();return false;" class="text-adminPrimary hover:underline flex items-center mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
        Back to Leads
    </a>

    <!-- Lead Card -->
    <div class="bg-white border border-adminInputBorder rounded-2xl shadow-md p-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
            <div>
                <h1 class="text-2xl font-bold text-adminTextPrimary">{{ $lead->name }}</h1>
                <p class="flex items-center gap-4 mt-2"><span class=" text-xl px-4 text-md text-txBlack font-bold bg-fuchsia-100 rounded-xl">{{ $lead->email }}</span> &bull; <span class="text-md px-4 text-md text-txBlack font-bold bg-fuchsia-100 rounded-xl">{{ $lead->phone }}</span></p>
            </div>
            <div class="flex items-center space-x-4 mt-2 md:mt-0">
                <div class="mt-2 md:mt-0 ">
                    <p class="text-md text-txBlack font-medium text-center mb-1">Next Update:</p>

                    @php
                    $last = collect($lead->comments)->last();
                    @endphp

                    <p class="font-semibold text-gray-800 text-base rounded-xl py-1 px-2 bg-amber-100">
                        @if($last && $last->next_update)
                        {{ \Carbon\Carbon::parse($last->next_update)->format('d M Y, h:i A') }}
                        @else
                        No next update scheduled
                        @endif
                    </p>
                </div>

                <span class="mt-3 md:mt-0 inline-block px-3 py-1 rounded-full text-xs font-medium {{ $lead->is_read ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                    {{ $lead->is_read ? '✔️ Read' : '🕓 Unread' }}
                </span>
            </div>
        </div>

        <!-- Lead Meta Info -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm mb-6">

            <div><span class="font-semibold text-gray-600">Created:</span> {{ $lead->created_at->format('d M Y, h:i A') }}</div>
            <div><span class="font-semibold text-gray-600">Updated:</span> {{ $lead->updated_at->format('d M Y, h:i A') }}</div>
        </div>

        <!-- Lead Comment -->
        <div class="bg-gray-50 border rounded-lg p-4 mb-6">
            <h2 class="text-md font-semibold mb-1 text-adminTextPrimary">Lead's Message:</h2>
            <p class="text-gray-700">{{ $lead->message }}</p>
        </div>

        <!-- Internal Note -->
        <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded-lg mb-6">
            <h2 class="text-md font-semibold text-blue-700">Latest Internal Note</h2>
            <p class="text-gray-700 mt-1">{{ $lead->message }}</p>
            <p class="text-xs text-gray-500 mt-1">— {{ $lead->author }}, {{ $lead->updated_at->format('d M Y, h:i A') }}</p>
        </div>

        <!-- Comment Chat Slider -->
        <div class="bg-white p-4 border rounded-xl shadow-inner">
            <h2 class="text-md font-semibold text-adminTextPrimary mb-3">Comment History</h2>

            <div class="space-y-3 max-h-72 overflow-y-auto pr-2">
                @php
                $comments = $lead->comments;
                @endphp
                @foreach ($comments as $comment)
                <div class="flex {{ $comment->author->name === Auth::user()->name ? 'justify-end' : 'justify-start' }}">
                    <div class="max-w-[75%] px-4 py-2 rounded-xl text-sm shadow
                                    {{ $comment->author === $lead->name ? 'bg-adminPrimary text-white rounded-br-none' : 'bg-gray-200 text-gray-800 rounded-bl-none' }}">
                        <p>{{ $comment->message }}</p>
                        <p class="text-xs mt-1 opacity-70 text-right">
                            — {{ $comment->author->name }} <br>
                            {{ $comment->created_at->format('d M Y, h:i A') }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection