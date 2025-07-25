@extends('Dashboard.layouts.app')

@section('metadata')
<title>Create Testimony</title>
<style>
    .forBorder {
        border-color: #49717B !important
    }
</style>
@endsection

@section('content')
<div class="container my-4 mx-auto md:max-w-6xl lg:max-w-7xl xl:max-w-full">
    <div class="my-5">
        <div class="mx-auto py-6 px-8 sm:px-12 bg-adminFormBg rounded-md">

            {{-- Back + Save --}}
            <div class="flex justify-between items-center mb-2">
                <a href="{{ route('testimony.list') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-md text-sm font-semibold shadow">
                    &larr; Back to List
                </a>

                <button form="createTestimony"
                    class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-4 py-2 rounded-md text-sm font-semibold shadow">
                    Save
                </button>
            </div>

            <h1 class="text-center text-2xl sm:text-3xl font-bold text-adminTextPrimary mb-4">
                Create New Testimony
            </h1>

            {{-- FORM --}}
            <form id="createTestimony"
                method="POST"
                enctype="multipart/form-data"
                class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf

                {{-- Name --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="name">Name</label>
                    <input id="name" name="name" type="text"
                        placeholder="Enter name"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Role --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="role">Role</label>
                    <input id="role" name="role" type="text"
                        placeholder="Enter role"
                        class="w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary">
                </div>

                {{-- Image --}}
                <div>
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="profile_image">Profile Image</label>
                    <input type="file" id="profile_image" name="profile_image"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 bg-white file:mr-3 file:rounded
                                  file:border-0 file:bg-adminPrimary file:px-3 file:py-1 file:text-white hover:file:bg-adminPrimaryHover">
                </div>

                {{-- Review Text --}}
                <div class="md:col-span-2">
                    <label class="block font-semibold text-adminTextPrimary mb-1" for="review_text">Review Text</label>
                    <textarea id="review_text" name="review_text" rows="3"
                        placeholder="Enter review text"
                        class="forBorder w-full border border-adminInputBorder rounded px-3 py-2 focus:border-adminPrimary focus:ring-adminPrimary"></textarea>
                </div>

                {{-- Save --}}
                <div class="md:col-span-2 flex justify-end">
                    <button type="submit"
                        class="bg-adminPrimary hover:bg-adminPrimaryHover text-white px-6 py-2 rounded-md text-sm font-semibold shadow">
                        Save Testimony
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script type="module">
    $(document).ready(function() {
        $('#createTestimony').on('submit', function(e) {
            e.preventDefault();
            $('.container').hide();
            $('.loadingbtn').show();

            let form = this;

            let formData = new FormData(this);
            formData.append('is_featured', $('input[name="is_featured"]').is(':checked'));

            $.ajax({
                url: url.store,
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    let status = response.status;
                    let message = response.message
                    if (status == 'success') {
                        $('#messageTitle').text(status).addClass('text-green-600').removeClass('text-red-600');
                        $('#messageContent').text(message);
                        $('#messageModal').removeClass('hidden');
                        $('.container').show();
                        $('.loadingbtn').hide();
                        form.reset();
                        setTimeout(() => {
                            window.location.href = url.list;
                        }, 1000);
                    } else {
                        $('#messageTitle').text('Error').addClass('text-red-600').removeClass('text-green-600');
                        $('#messageContent').text(message);
                        $('#messageModal').removeClass('hidden');
                    }
                },
                error: function(err) {
                    let error = err.responseJSON.errors;
                    $.each(error, (field, message) => {
                        $('#messageTitle').text(field.toUpperCase()).addClass('text-red-600').removeClass('text-green-600');
                        $('#messageContent').text(message);
                        $('#messageModal').removeClass('hidden');
                    })
                    $('.container').show();
                    $('.loadingbtn').hide();
                }
            });
        });

    });

    const url = {
        store: "{{ route('testimony.store') }}",
        list: "{{ route('testimony.list') }}"
    };
</script>

@endsection