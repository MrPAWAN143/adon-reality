@extends('Dashboard.layouts.app')

@section('metadata')
<title>Category List</title>
@endsection

@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl xl:max-w-full">
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
                        @php $count = 1; @endphp
                        @foreach($categories as $category)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $count }}</td>
                            <td class="px-4 py-3 font-medium">
                                {{ $category->name }}
                                <p class="text-xs text-gray-500">{{ $category->description }}</p>
                            </td>
                            <td class="px-4 py-3">{{ $category->slug }}</td>

                            @if($category->name != "No categories found")
                            <td class="px-4 py-3">
                                {{-- clickable badge --}}
                                <button id="badge-{{ $category->id }}"
                                    type="button"
                                    data-id="{{ $category->id }}"
                                    data-route="{{ route('categories.toggle-status', $category->id) }}"
                                    class="status-toggle inline-block px-2 py-1 text-xs rounded-full
                    {{ $category->is_active ? 'bg-green-100 text-green-800'
                                           : 'bg-red-100  text-red-700' }}">
                                    {{ $category->is_active ? 'Active' : 'Inactive' }}
                                </button>
                            </td>


                            <td class="px-4 py-3 space-x-2">
                                <a href="#" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded text-xs">View</a>
                                <a href="{{ route('categories.edit' , $category->id) }}" class="inline-block bg-adminPrimary hover:bg-adminPrimaryHover text-white px-3 py-1 rounded text-xs">Edit</a>
                                <button type="button" class="deletebtn bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Delete</button>
                            </td>

                            @endif
                        </tr>
                        @php $count++; @endphp
                        @endforeach


                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
@section('scripts')
<script type="module">
    $(document).ready(function() {
        $('.deletebtn').on('click', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to delete this category?')) {
                $('.container').hide();
                $('.loadingbtn').show();
                $.ajax({
                    url: url.delete,
                    method: 'POST',
                    data: {
                        _method: 'DELETE',
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        let status = response.status;
                        let message = response.message;
                        if (status == 'success') {
                            $('#messageTitle').text(status).addClass('text-green-600').removeClass('text-red-600');
                            $('#messageContent').text(message);
                            $('#messageModal').removeClass('hidden');
                            setTimeout(() => {
                                window.location.href = url.list;
                            }, 1000);
                        }
                        $('.container').show();
                        $('.loadingbtn').hide();
                    },
                    error: function(err) {
                        let error = err.responseJSON.errors;
                        $.each(error, (field, message) => {
                            $('#messageTitle').text(field).addClass('text-red-600').removeClass('text-green-600');
                            $('#messageContent').text(message);
                            $('#messageModal').removeClass('hidden');
                        })
                        $('.container').show();
                        $('.loadingbtn').hide();
                    }
                });
            }
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
                        this.disabled = false;
                    },
                    error: () => {
                        alert('Could not change status, please try again.');
                        $('#statusModal').addClass('hidden');
                        this.disabled = false;
                    }
                });
            });

        });
    });

    const url = {
        delete: "{{ route('categories.delete', ':id') }}".replace(':id', '{{ $category->id }}'),
        list: "{{ route('categories.list') }}",
    };
</script>
@endsection