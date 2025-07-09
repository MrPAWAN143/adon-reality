@extends('Dashboard.layouts.app')

@section('metadata')
<title>Blog List</title>
@endsection

@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl xl:max-w-full">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 bg-adminFormBg rounded-md">

            <!-- Header + “Create” -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-adminTextPrimary">Blog List</h1>
                <a href="{{ route('blog.create') }}"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    + New Blog
                </a>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto bg-white shadow rounded-lg">
                <table class="min-w-full divide-y divide-adminInputBorder">
                    <thead class="bg-adminSidebar text-white text-sm">
                        <tr>
                            <th class="px-4 py-3 text-left font-semibold">#</th>
                            <th class="px-4 py-3 text-left font-semibold">Title</th>
                            <th class="px-4 py-3 text-left font-semibold">Slug</th>
                            <th class="px-4 py-3 text-left font-semibold">Summary</th>
                            <th class="px-4 py-3 text-left font-semibold">Author</th>
                            <th class="px-4 py-3 text-left font-semibold">Status</th>
                            <th class="px-4 py-3 text-left font-semibold">Actions</th>
                        </tr>
                    </thead>

                    @if($blogs->isEmpty())
                    <tbody>
                        <tr>
                            <td colspan="6" class="px-4 py-3 text-center text-gray-500">No blogs found.</td>
                        </tr>
                    </tbody>
                    @else
                    <tbody class="divide-y divide-adminInputBorder text-sm">
                        @php $count = 1; @endphp
                        @foreach($blogs as $blog)
                        {{-- Row 1 --}}
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $count++ }}</td>
                            <td class="px-4 py-3 font-medium">{{ $blog->title }}</td>
                            <td class="px-4 py-3">{{ $blog->slug }}</td>

                            <td class="px-4 py-3">{{ Str::limit($blog->summary, 50) }}</td>
                            <td class="px-4 py-3">{{ $blog->user->name }}</td>
                            <td class="px-4 py-3">
                                {{-- clickable badge --}}
                                <button id="badge-{{ $blog->id }}"
                                    type="button"
                                    data-id="{{ $blog->id }}"
                                    data-route="{{ route('blog.toggle-status', $blog->id) }}"
                                    class="status-toggle inline-block px-2 py-1 text-xs rounded-full
                    {{ $blog->is_active ? 'bg-green-100 text-green-800'
                                           : 'bg-red-100  text-red-700' }}">
                                    {{ $blog->is_active ? 'Active' : 'Inactive' }}
                                </button>
                            </td>
                            <td class="px-4 py-3 space-x-1">
                                <a href="{{ route('blog.show', $blog->slug) }}" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded text-xs">View</a>
                                <a href="{{ route('blog.edit' , $blog->id) }}" class="inline-block bg-adminPrimary hover:bg-adminPrimaryHover text-white px-3 py-1 rounded text-xs">Edit</a>
                                <button type="button" data-id="{{ $blog->id }}" class="deletebtn bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">
                                    Delete
                                </button>
                            </td>
                        </tr>

                        @endforeach


                    </tbody>
                    @endif
                </table>
            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="module">
    $(document).ready(function() {
        const deleteRoute = id =>
            "{{ route('blog.delete', ':id') }}".replace(':id', id);

        $('.deletebtn').on('click', function(e) {
            e.preventDefault();

            if (!confirm('Are you sure you want to delete this Blog?')) return;

            const id = $(this).data('id'); // ← grab data-id
            const url = deleteRoute(id); // ← build the URL

            $('.container').hide();
            $('.loadingbtn').show();

            $.ajax({
                url: url,
                method: 'POST', // spoof DELETE
                data: {
                    _method: 'DELETE',
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.status === 'success') {
                        $('#messageTitle')
                            .text('Success')
                            .addClass('text-green-600')
                            .removeClass('text-red-600');
                        $('#messageContent').text(response.message);
                        $('#messageModal').removeClass('hidden');
                        $('button[data-id="' + id + '"]').closest('tr').remove();
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    }
                },
                error: function(err) {
                    const errors = err.responseJSON?.errors ?? {};
                    const firstField = Object.keys(errors)[0] || 'Error';
                    $('#messageTitle')
                        .text(firstField)
                        .addClass('text-red-600')
                        .removeClass('text-green-600');
                    $('#messageContent').text(errors[firstField] || 'Something went wrong.');
                    $('#messageModal').removeClass('hidden');
                },
                complete: function() { // always runs
                    $('.container').show();
                    $('.loadingbtn').hide();
                }
            });
        });


         $(function() {

            /** ensure CSRF for AJAX */
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let route = null,
                id = null; // will hold current target

            /* open modal when badge is clicked */
            $('.status-toggle').on('click', function() {
                this.disabled = true; // disable button to prevent multiple clicks
                route = $(this).data('route');
                id = $(this).data('id');
                $('#statusModal').removeClass('hidden');
            });

            /* cancel */
            $('#cancelToggle').on('click', () => {
                $('#statusModal').addClass('hidden');
                route = id = null;
            });

            /* confirm + PATCH */
            $('#confirmToggle').on('click', function() {
                this.disabled = true; // disable button to prevent multiple clicks
                this.textContent = 'Changing...';
                if (!route) return;

                $.ajax({
                    url: route,
                    type: 'PATCH',
                    success: res => {
                        const $badge = $('#badge-' + id);
                        $badge.text(res.text)
                            .attr('class',
                                'status-toggle inline-block px-2 py-1 text-xs rounded-full ' + res.classes);
                        $('#statusModal').addClass('hidden');
                        route = id = null;
                        alert('Status changed successfully!');
                        location.reload();
                    },
                    error: () => {
                        alert('Could not change status, please try again.');
                        $('#statusModal').addClass('hidden');
                    }
                });
            });

        });
    });


</script>

@endsection