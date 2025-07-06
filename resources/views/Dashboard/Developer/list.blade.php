@extends('Dashboard.layouts.app')

@section('metadata')
<title>Developers</title>
@endsection



@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl xl:max-w-full">
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
                            <th class="px-4 py-3 text-left font-semibold !w-52">Actions</th>
                        </tr>
                    </thead>

                    @if($developmentPartners->isEmpty())
                    <tbody class="divide-y divide-adminInputBorder text-sm">
                        <tr>
                            <td colspan="7" class="px-4 py-3 text-center text-gray-500">No developers found</td>
                        </tr>
                    </tbody>
                    @else
                    <tbody class="divide-y divide-adminInputBorder text-sm">
                           @php $count = 1; @endphp
                        @foreach($developmentPartners as $index => $partner)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $count }}</td>
                            <td class="px-4 py-3 font-medium">{{ $partner->developer_name }}</td>
                            <td class="px-4 py-3">{{ $partner->slug }}</td>
                            <td class="px-4 py-3">{{ $partner->founded_in }}</td>
                            <td class="px-4 py-3">{{ $partner->ongoing_projects }}</td>

                            <td class="px-4 py-3">
                                {{-- clickable badge --}}
                                <button id="badge-{{ $partner->id }}"
                                    type="button"
                                    data-id="{{ $partner->id }}"
                                    data-route="{{ route('development-partners.toggle-status', $partner->id) }}"
                                    class="status-toggle inline-block px-2 py-1 text-xs rounded-full
                    {{ $partner->is_active ? 'bg-green-100 text-green-800'
                                           : 'bg-red-100  text-red-700' }}">
                                    {{ $partner->is_active ? 'Active' : 'Inactive' }}
                                </button>
                            </td>


                            <!-- Actions -->
                            <td class="px-2 py-3 space-x-1">
                                <a href="{{ route('development-partners.show', $partner->slug) }}" target="_blank" class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded text-xs">View</a>
                                <a href="{{ route('development-partners.edit' , $partner->id) }}" class="inline-block bg-adminPrimary hover:bg-adminPrimaryHover text-white px-3 py-1 rounded text-xs">Edit</a>
                                <button type="button" class="deletebtn bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Delete</button>
                            </td>
                        </tr>
                        @php $count++; @endphp
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
        // Handle delete confirmation

        $('.deletebtn').on('click', function(e) {
            e.preventDefault();
            if (confirm('Are you sure you want to delete this developer?')) {
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
                                window.location.href = "{{ route('development-partners.list') }}";
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
                    },
                    error: () => {
                        alert('Could not change status, please try again.');
                        $('#statusModal').addClass('hidden');
                    }
                });
            });

        });
    });

    const url = {
        delete: "{{ route('development-partners.delete', ':id') }}".replace(':id', '{{ $partner->id }}')
    };
</script>
@endsection