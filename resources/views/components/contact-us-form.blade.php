
<section class="py-8 bg-white text-center mb-8">
    <div class="container sm:max-w-lg md:max-w-5xl mx-auto px-4">

        <h2 class="heading ">
            {{ $heading }}
        </h2>

        <p class="subheading text-gray-700 text-xs sm:text-base max-w-[90%] mx-auto mb-6">
            {{ $subheading }}
        </p>


        <form class="contact-form bg-white border border-[#6D0A17] rounded-2xl px-6 py-6 shadow-sm" method="POST" action="#">
            <div class="form-grid grid grid-cols-1 sm:grid-cols-2 gap-4">
                <input type="text" name="first_name" placeholder="First Name"
                    class="sm:w-full border-b border-gray-300 focus:outline-none text-sm py-2 placeholder-gray-500" />
                <input type="text" name="last_name" placeholder="Last Name"
                    class="sm:w-full border-b border-gray-300 focus:outline-none text-sm py-2 placeholder-gray-500" />
                <input type="email" name="email" placeholder="Email"
                    class="sm:w-full border-b border-gray-300 focus:outline-none text-sm py-2 placeholder-gray-500" />
                <input type="text" name="phone" placeholder="Phone"
                    class="sm:w-full border-b border-gray-300 focus:outline-none text-sm py-2 placeholder-gray-500" />
            </div>
            <textarea name="message" rows="3" placeholder="What Can we help you?"
                class="sm:w-full border-b  border-gray-300 focus:outline-none text-sm py-2 placeholder-gray-500 resize-none"></textarea>

            <button type="submit"
                class="contact-form-button">
                Book a Call
            </button>
        </form>
    </div>
</section>