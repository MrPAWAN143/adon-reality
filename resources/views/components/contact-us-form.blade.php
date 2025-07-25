<section class="md:pb-8 py-3 bg-white text-center mb-8">
    <div class="container max-w-lg md:max-w-5xl mx-auto px-4">

        <h2 class="heading m-heading">
            {{ $heading }}
        </h2>

        <p class="subheading m-subheading form-subheading text-[8px] tracking-tight text-gray-700  md:text-[14px] md:max-w-[90%] w-full mx-auto mb-6">
            {{ $subheading }}
        </p>

        <!-- Thank You Modal -->
        <div id="thankYouModal"
            class="fixed inset-0 flex hidden bg-black bg-opacity-50 z-50 justify-center items-center">
            <div class="bg-white rounded-xl shadow-xl max-w-sm w-full p-6 text-center">
                <h3 class="text-xl font-semibold text-green-600 mb-2">Thank You!</h3>
                <p class="text-gray-700 text-sm">Your message has been received. Our team will contact you shortly.</p>
                    <button id="closeModal" class="mt-2 px-4 py-2 text-white bg-primary rounded hover:bg-primary-dark">Close</button>
            </div>
        </div>

        <form method="POST" class="queryform contact-form bg-white border border-primary rounded-2xl md:px-6 md:my-3 md:py-6 py-3 px-1 shadow-sm mt-6">
            @csrf
            <div class="form-grid grid grid-cols-2 md:gap-4">
                <div class="md:col-span-1 col-span-2">
                    <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}"
                        class="border-b border-gray-300 focus:outline-none text-sm md:py-2 py-1 placeholder-gray-500" />
                    <div class="error text-start text-base text-red-500 mt-1"></div>
                </div>

                <div class="md:col-span-1 col-span-2">
                    <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}"
                        class="w-full border-b border-gray-300  text-sm py-2 placeholder-gray-500" />
                    <div class="error text-start text-base text-red-500 mt-1"></div>
                </div>

                <div class="md:col-span-1 col-span-2">
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                        class="w-full border-b border-gray-300 focus:outline-none text-sm py-2 placeholder-gray-500" />
                    <div class="error text-start text-base text-red-500 mt-1"></div>
                </div>

                <div class="md:col-span-1 col-span-2">
                    <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}"
                        class="w-full border-b border-gray-300 focus:outline-none text-sm py-2 placeholder-gray-500" />
                    <div class="error text-start text-base text-red-500 mt-1"></div>
                </div>
            </div>

            <div class="mt-4 col-span-2 md:col-span-2">
                <textarea name="message" rows="3" placeholder="What can we help you?"
                    class="w-full border-b border-gray-300 focus:outline-none text-sm py-2 placeholder-gray-500 resize-none">{{ old('message') }}</textarea>
                <div class="error text-start text-base text-red-500 mt-1"></div>
            </div>

            <button type="submit" class="contact-form-button mt-4">Book a Call</button>
        </form>

    </div>
</section>