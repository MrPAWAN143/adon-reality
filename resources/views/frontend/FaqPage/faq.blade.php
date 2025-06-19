@extends('frontend.layouts.app')
@section('metadata')
<title>Home page</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/manoj/faq/faq.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<script src="{{ asset('assets/js/manoj/faq/faq.js') }}"></script>

@endsection

@section("faqpage")


  <section class="relative bg-cover bg-center bg-no-repeat h-[300px] md:h-[400px] lg:h-[500px]" style="background-image: url('your-image-path.jpg');">
  <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <div class="text-center px-4">
      <h1 class="text-2xl md:text-4xl font-bold text-white mb-4">
        FAQs for Real Estate Investors
      </h1>
      <p class="text-white text-sm md:text-lg max-w-2xl mx-auto">
        Everything you need to know before investing in verified, high-value properties with XYZ Realty.
      </p>
    </div>
  </div>
</section>
<div class="max-w-6xl mx-auto bg-white shadow-md rounded-lg p-6 flex gap-10">
    <!-- Sidebar -->
    <div class="w-1/3">
      <h2 class="text-lg font-semibold text-red-700 mb-4">Company & Vision</h2>
      <ul class="space-y-3 text-gray-800">
        <li class="hover:text-red-600 cursor-pointer">Investment Opportunities</li>
        <li class="hover:text-red-600 cursor-pointer">Returns & Financials</li>
        <li class="hover:text-red-600 cursor-pointer">Safety & Regulations</li>
        <li class="hover:text-red-600 cursor-pointer">Project Development & Construction</li>
        <li class="hover:text-red-600 cursor-pointer">Payment & Exit Options</li>
        <li class="hover:text-red-600 cursor-pointer">Reporting & Communication</li>
      </ul>
    </div>

    <!-- Right Panel -->
    <div class="w-2/3 space-y-4">
      <!-- FAQ Accordion -->
      <div class="border-b" onclick="toggleAccordion(this)">
        <div class="py-3 cursor-pointer flex justify-between items-center">
          <span>What is your investment philosophy in real estate development?</span>
          <span class="text-xl">&#9662;</span>
        </div>
        <div class="hidden text-gray-600 pb-3">Answer goes here.</div>
      </div>

      <div class="border-b" onclick="toggleAccordion(this)">
        <div class="py-3 cursor-pointer flex justify-between items-center">
          <span>How do you identify high-potential investment opportunities?</span>
          <span class="text-xl">&#9662;</span>
        </div>
        <div class="hidden text-gray-600 pb-3">Answer goes here.</div>
      </div>

      <div class="border-b" onclick="toggleAccordion(this)">
        <div class="py-3 cursor-pointer flex justify-between items-center">
          <span>Can I invest with your company as a partner or client?</span>
          <span class="text-xl">&#9662;</span>
        </div>
        <div class="hidden text-gray-600 pb-3">Answer goes here.</div>
      </div>

      <div class="border-b" onclick="toggleAccordion(this)">
        <div class="py-3 cursor-pointer flex justify-between items-center">
          <span>What is the typical timeline for returns on investment?</span>
          <span class="text-xl">&#9662;</span>
        </div>
        <div class="hidden text-gray-600 pb-3">Answer goes here.</div>
      </div>

      <div class="border-b" onclick="toggleAccordion(this)">
        <div class="py-3 cursor-pointer flex justify-between items-center">
          <span>Do you focus more on rental yield or property appreciation?</span>
          <span class="text-xl">&#9662;</span>
        </div>
        <div class="hidden text-gray-600 pb-3">Answer goes here.</div>
      </div>

      <div class="border-b" onclick="toggleAccordion(this)">
        <div class="py-3 cursor-pointer flex justify-between items-center">
          <span>How do you ensure risk management in your investments?</span>
          <span class="text-xl">&#9662;</span>
        </div>
        <div class="hidden text-gray-600 pb-3">Answer goes here.</div>
      </div>

      <div class="border-b" onclick="toggleAccordion(this)">
        <div class="py-3 cursor-pointer flex justify-between items-center">
          <span>What types of markets or locations do you prioritize for investing?</span>
          <span class="text-xl">&#9662;</span>
        </div>
        <div class="hidden text-gray-600 pb-3">Answer goes here.</div>
      </div>
    </div>
  </div>

  <script>
    function toggleAccordion(element) {
      const answer = element.querySelector('div:nth-child(2)');
      const icon = element.querySelector('span:last-child');

      if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
        icon.innerHTML = '&#9652;'; // Up arrow
      } else {
        answer.classList.add('hidden');
        icon.innerHTML = '&#9662;'; // Down arrow
      }
    }
  </script>


<section class="max-w-4xl mx-auto px-4 py-12 text-center">
  <h2 class="text-2xl md:text-3xl font-bold mb-2">Still Have a Question?</h2>
  <p class="text-gray-700 mb-8 max-w-2xl mx-auto">
    Have questions or ready to take the next step? Whether you're looking to buy, rent, or invest, our team is here to guide you every step of the way.
  </p>

  <form class="bg-white border border-[#7a0c1c] rounded-xl p-6 space-y-6">
    <div class="grid md:grid-cols-2 gap-6">
      <input
        type="text"
        placeholder="First Name"
        class="form-inp"
      />
      <input
        type="text"
        placeholder="Last Name"
        class="form-inp"
      />
      <input
        type="email"
        placeholder="Email"
        class="form-inp col-span-1 md:col-span-1"
      />
      <input
        type="tel"
        placeholder="Phone"
        class="form-inp col-span-1 md:col-span-1"
      />
      <textarea
        placeholder="What can we help you?"
        rows="3"
        class="form-inp md:col-span-2 resize-none"
      ></textarea>
    </div>

    <button
      type="submit"
      class="bg-[#5b0a16] hover:bg-[#420710] text-white py-3 rounded-full w-full text-lg transition duration-300"
    >
      Book a Call
    </button>
  </form>
</section>

<script>

   document.addEventListener('DOMContentLoaded', () => {
    const accordionBtns = document.querySelectorAll('.accordion-head');

    accordionBtns.forEach((btn) => {
      btn.addEventListener('click', () => {
        const content = btn.nextElementSibling;
        const icon = btn.querySelector('span i');

        const isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";

        // Close all
        document.querySelectorAll('.accordion-content-container').forEach(c => {
          c.style.maxHeight = null;
        });

        document.querySelectorAll('.accordion-head span i').forEach(i => {
          i.style.transform = "rotate(0deg)";
        });

        // Open this one
        if (!isOpen) {
          content.style.maxHeight = content.scrollHeight + "px";
          icon.style.transform = "rotate(180deg)";
        }
      });
    });
  });
</script>
@endsection