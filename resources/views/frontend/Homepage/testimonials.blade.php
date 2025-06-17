<section class="py-16 bg-white">
    <div class="container max-w-5xl mx-auto px-4">
        <!-- Heading -->
        <h2 class="heading text-center">Hear From Our Investors</h2>
        <p class="subheading text-center">
            Genuine testimonials and success stories from our valued investors.
        </p>


        <div class="testimonial-slider px-6">
            @foreach([
            ['stars' => 5, 'text' => 'Incredible platform for first-time investors like me!', 'name' => 'Riya Malhotra', 'role' => 'Financial Analyst', 'img' => '/images/user4.jpg'],
            ['stars' => 5, 'text' => 'Impressed by the transparency and ease of investment.', 'name' => 'Priya Mehta', 'role' => 'Marketing Manager', 'img' => '/images/user5.jpg'],
            ['stars' => 5, 'text' => 'A smooth investment experience. Clear communication and great support!', 'name' => 'Nathan Harper', 'role' => 'Software Developer', 'img' => '/images/user1.jpg'],
            ['stars' => 5, 'text' => 'The virtual property tour helped me finalize faster than ever.', 'name' => 'Arjun Verma', 'role' => 'UX Designer', 'img' => '/images/user2.jpg'],
            ['stars' => 5, 'text' => 'Detailed listings and quick support made the process seamless.', 'name' => 'Karan Sethi', 'role' => 'Entrepreneur', 'img' => '/images/user3.jpg'],
            ] as $testimonial)
            <div class="testimonial-card px-3">
                <div class="bg-white rounded-xl px-6 py-6 w-[300px] shadow-md transition duration-300 ease-in-out h-full">
                    <div class="flex text-[#710000] mb-3 gap-1">
                        @for ($i = 0; $i
                        < $testimonial['stars']; $i++)
                            <x-zondicon-star-full class="w-5 h-5" />
                        @endfor
                    </div>
                    <p class="text-gray-800 text-base font-medium mb-4 line-clamp-3">{{ $testimonial['text'] }}</p>
                    <div class="flex items-center gap-3 mt-auto">
                        <img src="{{ $testimonial['img'] }}" alt="{{ $testimonial['name'] }}" class="w-10 h-10 rounded-full object-cover">
                        <div class="text-left">
                            <p class="text-black font-semibold">{{ $testimonial['name'] }}</p>
                            <p class="text-gray-500 text-sm">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>