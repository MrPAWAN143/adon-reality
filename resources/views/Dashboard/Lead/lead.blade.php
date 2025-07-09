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
                <h1 class="text-2xl font-bold text-adminTextPrimary">Leads / Reviews</h1>
                <a href="#"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    + New Lead
                </a>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto bg-white shadow rounded-lg">
                <table class="min-w-full divide-y divide-adminInputBorder">
                    <thead class="bg-adminSidebar text-white text-sm">
                        <tr class="text-left">
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Name / Email</th>
                            <th class="px-4 py-3">Phone</th>
                            <th class="px-4 py-3">Lead&nbsp;Date</th>
                            <th class="px-4 py-3">Updated</th>
                            <th class="px-4 py-3">Message</th>
                            <th class="px-4 py-3">Comment</th>
                            <th class="px-4 py-3">Author</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-adminInputBorder text-sm">

                        @php $i = 1; @endphp

                        @foreach ($leads as $lead)
                        @php
                        $lastComment = $lead->comments->last();
                        @endphp

                        <tr data-href="{{ route('show.lead.details', $lead->id) }}"
                            data-read="{{ $lead->is_read ? '1' : '0' }}"
                            data-id="{{ $lead->id }}"
                            class="cursor-pointer hover:bg-gray-100
                                @php
                                    if (!$lead->is_read && !$lead->is_new) {
                                        echo ' bg-rose-100'; // unread and not new
                                    } elseif ($lead->is_new) {
                                        echo 'bg-amber-100'; // highlight all new leads
                                    }
                                @endphp
                            ">
                            {{-- ----------  New: index number ---------- --}}

                            <td class="px-4 py-3">{{ $i++ }}</td>

                            <td class="px-4 py-3 font-medium">
                                {{ $lead->name }}<br>
                                <span class="text-xs text-gray-500">{{ $lead->email }}</span>
                            </td>

                            <td class="px-4 py-3 text-gray-500 font-bold">{{ $lead->phone ?? '-' }}</td>

                            <td class="px-4 py-3">{{ $lead->created_at }}</td>
                            <td class="px-4 py-3">{{ $lead->updated_at }}</td>

                            <td class="px-4 py-3">{{ $lead->message ?? '-' }}</td>

                            {{-- ----------  NEW: last comment & author ---------- --}}
                            <td class="px-4 py-3" data-message>
                                {{ $lastComment?->message ?? '-' }}
                            </td>

                            <td class="px-4 py-3" data-author>
                                {{ $lastComment && $lastComment->author_id === auth()->id()
                       ? 'You'
                       : ($lastComment?->author?->name ?? '-') }}
                            </td>
                            <!-- Actions -->
                            <td class="px-4 py-3 flex gap-2 items-center">

                                <!-- Mark as Read -->
                                <button type="button" title="Mark as Read"
                                    class="mark-read hover:bg-gray-200 p-2 rounded transition
                                           {{ $lead->is_read ? 'text-blue-600' : 'text-gray-400' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.707 9.293a1 1 0 00-1.414 0L10 14.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l6-6a1 1 0 000-1.414z" />
                                    </svg>
                                </button>

                                <!-- Save Message -->
                                <button type="button" title="Save Message"
                                    class="save-msg hover:bg-gray-200 p-2 rounded transition
                                         @php 
                                         if($lastComment && $lastComment->author_id === auth()->id()) {
                                             echo 'text-green-600';
                                         } else {
                                             echo 'text-gray-400';
                                         }
                                         @endphp
                                         ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 5v14l7-5 7 5V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
                                    </svg>
                                </button>

                                <!-- Send Mail
                                <button type="button" title="Send Mail"
                                    class="send-mail hover:bg-gray-200 p-2 rounded transition text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </button> -->
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>

<!-- Message Modal -->
<div id="messageModal" class="fixed inset-0 z-[500] hidden items-center justify-center bg-black/50">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 space-y-4">
        <h2 class="text-lg font-semibold">Add Internal Message</h2>
        <textarea id="messageInput" rows="4" class="forBorder w-full border rounded p-2" placeholder="Write a message..."></textarea>
        <p class="text-sm text-gray-500">Date: <input type="datetime-local" id="datepicker"></p>
        <div class="text-right space-x-2">
            <button class="closeMessageModal bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">Cancel</button>
            <button id="saveMessageBtn" class=" bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Save</button>
        </div>
    </div>
</div>

<!-- Mail Modal -->
<div id="mailModal" class="fixed inset-0 z-[500] hidden items-center justify-center bg-black/50">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6 space-y-4">
        <h2 class="text-lg font-semibold">Send Mail</h2>
        <input id="mailSubject" type="text" placeholder="Subject" class="w-full border rounded p-2">
        <textarea id="mailBody" rows="4" class=" forBorder w-full border rounded p-2" placeholder="Message body..."></textarea>
        <div class="text-right space-x-2">
            <button onclick="closeMailModal()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">Cancel</button>
            <button id="sendMailBtn" class=" bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded">Send</button>
        </div>
    </div>
</div>
@endsection



@section('scripts')
<script type="module">
    $(function() {
        // Navigate to show page when row (but not buttons) is clicked
        $('tbody').on('click', 'tr[data-href]', function(e) {
            // If the target is a button or inside a button, ignore
            if ($(e.target).closest('button').length) return;

            const url = $(this).data('href');
            window.location.href = url;
        });
    });
</script>

<script type="module">
    $(function() {

        let $currentRow = null;

        function closeMessageModal() {
            $('#messageModal').removeClass('flex').addClass('hidden');
            $currentRow = null;
        }

        /* -------------------------------------------------
         * Row navigation
         * -------------------------------------------------*/
        $('tbody').on('click', 'tr[data-href]', function(e) {
            if ($(e.target).closest('button').length) return; // ignore clicks on buttons
            window.location.href = $(this).data('href');
        });

        /* -------------------------------------------------
         * Open “add / edit internal message” modal
         * -------------------------------------------------*/
        $(document).on('click', '.save-msg', function() {
            $currentRow = $(this).closest('tr');

            $('#messageModal').removeClass('hidden').addClass('flex');
        });

        /* -------------------------------------------------
         * Persist message
         * -------------------------------------------------*/
        $('#saveMessageBtn').on('click', function() {
            const msg = $('#messageInput').val().trim();
            const date = $('#datepicker').val().trim();

            if (!msg || !$currentRow) {
                closeMessageModal();
                return;
            }

            $.ajax({
                url: '/leads/' + $currentRow.data('id') + '/message',
                type: 'POST',
                dataType: 'json',
                data: {
                    message: msg,
                    date: date
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(res) {
                    // res = { comment, author }
                    alert(res.message)
                    $('#messageInput').val('')
                    $('#datepicker').val('');
                    setTimeout(() => {
                        location.reload();
                    }, 1000); // reset after 1 second
                },

                error: function() {
                    alert('Could not save – please try again.');
                },

                complete: closeMessageModal
            });
        });

        $(document).on('click', '.closeMessageModal', closeMessageModal);

        /* -------------------------------------------------
         * Toggle read / unread
         * -------------------------------------------------*/
        $(document).on('click', '.mark-read', function() {
            if (!confirm('Toggle read status for this lead?')) return;

            const $row = $(this).closest('tr');
            const id = $row.data('id');
            const $button = $(this);

            $.ajax({
                url: '/leads/' + id + '/toggle-read',
                type: 'POST',
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(res) {
                    alert(res.message);
                    setTimeout(() => {
                        location.reload();
                    }, 1000); // reset after 1 second
                },

                error: function() {
                    alert('Could not update status – please try again.');
                }
            });
        });

    });
</script>


@endsection