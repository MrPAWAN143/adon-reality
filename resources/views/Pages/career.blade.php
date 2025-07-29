@extends('Pages.layouts.app')
@section('metadata')
<title> Adon Realty - Careers</title>
@endsection
@section('styles')

<style>
  .legacy-card.career img {
    display: block !important;
  }
</style>

@endsection
@section('content')
<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
  <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a href="{{ route('career') }}" class="ml-[-5px]">Career</a></div>
</section>
<x-banner-section class="px-4 h-[25vh] md:h-[55vh] md:max-h-[45vh]" buttonClass="banner-button" mobileBanner="{{ asset('assets/images/bannerImages/career-banner.jpg') }}" image="{{ asset('assets/images/bannerImages/career-banner.jpg') }}" title="Join Our Team at ADON" subtitle="Passionate about making a difference? Explore your future with us." buttonText="View Opportunities" buttonLink="#" />

<section class="py-10 md:pb-8 pb-5 bg-white text-center mx-auto">
  <h2 class="md:text-[24px] font-bold text-[16px] md:mb-8 mb-4 text-center ">Our Core Services</h2>


  <div class="max-w-[1100px] mx-auto grid grid-cols-2 md:grid-cols-4 md:gap-6 gap-4 md:px-0 px-4 place-items-center">
    <x-legacy-card class="legacy-card career flex flex-col items-center justify-center gap-3 " imgClass="w-10 h-10 rounded-lg mb-4" image="{{ asset('assets/images/icons/collaboration.svg') }}" description="Collaboration" descriptionClass="!text-lg" />
    <x-legacy-card class="legacy-card career flex flex-col items-center justify-center gap-3 !py-4" imgClass="w-10 h-10 rounded-lg mb-4" image="{{ asset('assets/images/icons/innovation.svg') }}" description="Innovation" descriptionClass="!text-lg" />
    <x-legacy-card class="legacy-card career flex flex-col items-center justify-center gap-3 !py-4" imgClass="w-10 h-10 rounded-lg mb-4" image="{{ asset('assets/images/icons/work-life-balance.svg') }}" description="Work-Life Balance" descriptionClass="!text-lg" />
    <x-legacy-card class="legacy-card career flex flex-col items-center justify-center gap-3 !py-4" imgClass="w-10 h-10 rounded-lg mb-4" image="{{ asset('assets/images/icons/growth.svg') }}" description="Growth" descriptionClass="!text-lg" />
  </div>
</section>


<section class="md:px-4 px-0 py-4 bg-white">
  <div class="container max-w-[1100px] mx-auto px-4 text-center">

    <x-heading-subheading heading="Employee Testimonials" subheading=" " headingClass="heading text-center" subHeadingClass="subheading text-center !mb-2" />
  </div>


  <div class="testimonial-slider max-w-5xl mx-auto px-3 !flex !gap-5 justify-center items-center overflow-x-auto">
    @if(isset($testimonials) && $testimonials->count() > 0)
    @foreach ($testimonials as $testimonial)
    <div class="review-card">
      <div class="bg-white rounded-xl text-sm p-3 text-txBlack overflow-hidden">
        <div class="flex items-center md:mb-3 mb-2">
          <div class="text-primary md:text-xl text-base">★★★★★</div>
        </div>
        <p class="md:mb-4 mb-2 md:text-md text-xs clamp-2-lines">{{ $testimonial->review_text }}</p>
        <div class="flex items-center">
          <img src="{{ asset($testimonial->photo) }}" alt="{{ $testimonial->name }}" class="w-10 h-10 rounded-[6px] mr-3">
          <div>
            <p class="font-semibold md:text-md text-xs">{{ $testimonial->name }}</p>
            <p class="text-[8px] md:text-xs text-txBlack single-line-ellipsis-homepage">{{ $testimonial->role }}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    @endif
  </div>
</section>

<section class="">
  <h2 class="md:text-[24px] font-bold text-[16px] md:mb-8 mb-4 text-center">Open Roles</h2>

  <div class="max-w-[1100px] mx-auto grid grid-cols-2 md:grid-cols-4 md:gap-6 gap-4 md:px-0 px-4 place-items-center" id="roleCards">
    <div class="open-roles cursor-pointer bg-gray-100 p-4 rounded-[20px]" data-role="marketing_executive">
      <h3>Marketing Executive</h3>
      <p class="text-sm font-semibold">Gurugram</p>
      <p class="text-xs mt-1">Develop and run marketing campaigns to drive leads.</p>
      <a class="mt-4">Apply Now</a>
    </div>
    <div class="open-roles cursor-pointer bg-gray-100 p-4 rounded-[20px]" data-role="sales_executive">
      <h3>Sales Executive</h3>
      <p class="text-sm font-semibold">Gurugram</p>
      <p class="text-xs mt-1">Drive sales and convert leads into clients.</p>
      <a class="mt-4">Apply Now</a>
    </div>
    <div class="open-roles cursor-pointer bg-gray-100 p-4 rounded-[20px]" data-role="sales_manager">
      <h3>Sales Manager</h3>
      <p class="text-sm font-semibold">Gurugram</p>
      <p class="text-xs mt-1">Lead sales teams and achieve revenue targets.</p>
      <a class="mt-4">Apply Now</a>
    </div>
    <div class="open-roles cursor-pointer bg-gray-100 p-4 rounded-md" data-role="hr_executive">
      <h3>HR Executive</h3>
      <p class="text-sm font-semibold">Gurugram</p>
      <p class="text-xs mt-1">Recruit, engage, and support the team.</p>
      <a class="mt-4">Apply Now</a>
    </div>
  </div>
</section>

<!-- Job Description Section -->
<section class="md:px-0 px-4 bg-white mb-3 mt-8" id="jobDescriptionSection">
  <div class="container max-w-[1100px] mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 pb-3 md:pt-12 pt-8 gap-4">
      <!-- Title -->
      <div class="space-y-4 text-sm font-medium text-gray-600">
        <div id="jobTitle" class="text-txBlack font-bold md:text-[22px] text-[16px]">Marketing Executive</div>
      </div>

      <!-- Accordion -->
      <div class="md:col-span-2 space-y-4" id="jobAccordion">
        <!-- Content filled by JS -->
      </div>
    </div>
    <div class="text-center mt-6">
      <a href="#" id="openModalBtn" class="bg-primary inline px-12 items-center justify-center hover:bg-white border hover:text-primary hover:border-primary text-white py-2 rounded-[15px] transition duration-300">Apply Now</a>
    </div>

  </div>
</section>


<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />

<!-- Modal -->
<div id="jobApplyModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
  <div class="bg-white max-w-md w-full p-6 rounded-2xl shadow-xl relative">
    <button id="closeModalBtn" class="absolute top-2 right-2 text-gray-500 hover:text-red-500 text-xl">&times;</button>

    <h3 id="formJobTitle" class="text-lg font-semibold mb-4">Apply for Job</h3>

    <form id="jobApplicationForm" enctype="multipart/form-data" class="space-y-4">
      @csrf
      <input type="hidden" name="job_title" id="hiddenJobTitle">

      <!-- Full Name -->
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Full Name</label>
        <input type="text" name="applicant_name" class="w-full border rounded-md px-3 py-2" required>
      </div>

      <!-- Email -->
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="applicant_email" class="w-full border rounded-md px-3 py-2" required>
      </div>

      <!-- Phone -->
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Phone</label>
        <input type="tel" name="applicant_phone" class="w-full border rounded-md px-3 py-2">
      </div>

      <!-- Resume -->
      <div>
        <label class="block mb-1 text-sm font-medium text-gray-700">Upload CV</label>
        <input type="file" name="resume" class="w-full border rounded-md px-3 py-2" required>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="w-full bg-primary text-white font-medium py-2 rounded-md hover:bg-opacity-90 transition">Submit Application</button>
    </form>

  </div>
</div>

<div id="thankYouModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
  <div class="bg-white p-6 rounded-xl shadow-xl text-center">
    <h3 class="text-lg font-bold mb-2 text-green-600">Thank You!</h3>
    <p class="text-sm mb-4">Your job application has been submitted successfully.</p>
    <button onclick="document.getElementById('thankYouModal').classList.add('hidden')" class="bg-primary text-white px-6 py-2 rounded-md">Close</button>
  </div>
</div>



@endsection

@section('scripts')

<script>
  const jobData = {
    marketing_executive: {
      title: "Marketing Executive",
      description: [{
          title: "Role Summary",
          content: `The Marketing Executive will develop and execute strategic marketing campaigns to drive brand awareness, lead generation, and business growth across digital and offline channels.`
        },
        {
          title: "Responsibilities",
          content: `<ul class="list-disc pl-5"><li>Plan and execute marketing campaigns (social media, email, influencer).</li><li>Coordinate with designers and content teams to ensure campaign alignment.</li><li>Track KPIs and optimize campaigns for better performance.</li><li>Conduct competitor research and market analysis.</li><li>Support event planning and promotional activities.</li></ul>`
        },
        {
          title: "Requirements",
          content: `<ul class="list-disc pl-5"><li>Bachelor’s in Marketing, Business, or related field.</li><li>1–3 years of marketing experience (real estate experience is a plus).</li><li>Strong communication and analytical skills.</li><li>Knowledge of SEO/SEM, Google Ads, and social media tools.</li><li>Creativity and multitasking ability.</li></ul>`
        },
        {
          title: "Perks & Benefits",
          content: `<ul class="list-disc pl-5"><li>Performance bonuses</li><li>Skill development workshops</li><li>Travel reimbursements</li><li>Flexible work environment</li></ul>`
        },
        {
          title: "Location & Department",
          content: `Gurugram | Marketing Department`
        }
      ]
    },
    sales_executive: {
      title: "Sales Executive",
      description: [{
          title: "Role Summary",
          content: `The Sales Executive will drive sales through client interactions, property site visits, and managing leads to close residential and commercial real estate deals.`
        },
        {
          title: "Responsibilities",
          content: `<ul class="list-disc pl-5"><li>Handle incoming leads and convert them into site visits.</li><li>Conduct property walkthroughs with prospective clients.</li><li>Build and maintain long-term relationships with clients.</li><li>Understand client needs and recommend suitable projects.</li><li>Achieve monthly and quarterly sales targets.</li></ul>`
        },
        {
          title: "Requirements",
          content: `<ul class="list-disc pl-5"><li>Bachelor’s degree in any field.</li><li>1–2 years of real estate or direct sales experience.</li><li>Excellent communication and interpersonal skills.</li><li>Confident in presenting and negotiating.</li><li>Willingness to travel for client meetings and site visits.</li></ul>`
        },
        {
          title: "Perks & Benefits",
          content: `<ul class="list-disc pl-5"><li>Attractive incentive structure</li><li>Petrol and mobile allowance</li><li>Fast growth opportunities</li><li>Mentorship from senior sales leaders</li></ul>`
        },
        {
          title: "Location & Department",
          content: `Gurugram | Sales Department`
        }
      ]
    },
    sales_manager: {
      title: "Sales Manager",
      description: [{
          title: "Role Summary",
          content: `The Sales Manager will lead a team of sales executives, strategize market penetration, and ensure revenue targets are met in a competitive real estate market.`
        },
        {
          title: "Responsibilities",
          content: `<ul class="list-disc pl-5"><li>Develop and execute sales strategies for different projects.</li><li>Manage, train, and motivate a team of sales executives.</li><li>Monitor team performance and provide regular feedback.</li><li>Forecast sales goals and ensure target achievement.</li><li>Coordinate with marketing for lead generation and campaign input.</li></ul>`
        },
        {
          title: "Requirements",
          content: `<ul class="list-disc pl-5"><li>Bachelor’s or Master’s degree in Business/Sales/Marketing.</li><li>Minimum 4–6 years of real estate sales experience.</li><li>Strong leadership and negotiation skills.</li><li>Data-driven mindset and CRM tool experience.</li><li>Deep knowledge of Gurgaon/Delhi NCR property market.</li></ul>`
        },
        {
          title: "Perks & Benefits",
          content: `<ul class="list-disc pl-5"><li>Leadership training programs</li><li>Performance-linked bonuses</li><li>Company-sponsored events and off-sites</li><li>Health & travel allowances</li></ul>`
        },
        {
          title: "Location & Department",
          content: `Gurugram | Sales Department`
        }
      ]
    },
    hr_executive: {
      title: "Human Resource Executive",
      description: [{
          title: "Role Summary",
          content: `The HR Executive will oversee recruitment, employee engagement, and administrative tasks to maintain a motivated and efficient workplace.`
        },
        {
          title: "Responsibilities",
          content: `<ul class="list-disc pl-5"><li>Handle end-to-end recruitment and onboarding processes.</li><li>Maintain employee records and HR databases.</li><li>Assist in payroll processing and attendance monitoring.</li><li>Organize training sessions and employee engagement activities.</li><li>Support HR policy implementation and conflict resolution.</li></ul>`
        },
        {
          title: "Requirements",
          content: `<ul class="list-disc pl-5"><li>Bachelor’s in HR, Business Administration, or related field.</li><li>1–3 years of HR experience.</li><li>Strong people skills and organizational ability.</li><li>Familiarity with HR software and labor laws.</li><li>Excellent written and verbal communication.</li></ul>`
        },
        {
          title: "Perks & Benefits",
          content: `<ul class="list-disc pl-5"><li>Exposure to multiple HR domains</li><li>Paid leave and wellness initiatives</li><li>Regular team outings and celebrations</li><li>Career growth opportunities</li></ul>`
        },
        {
          title: "Location & Department",
          content: `Gurugram | Human Resources Department`
        }
      ]
    }
  };

  function renderJob(roleKey) {
    const role = jobData[roleKey];
    if (!role) return;
    document.getElementById("jobTitle").innerText = role.title;

    const accordion = document.getElementById("jobAccordion");
    accordion.innerHTML = "";
    role.description.forEach((item, index) => {
      const id = `section-${index}`;
      accordion.innerHTML += `
        <div class="border-b pb-2">
          <button class="accordion-btn flex justify-between items-center w-full text-left text-[14px] md:text-[18px] font-medium text-txBlack hover:text-primary transition-all">
            <span>${item.title}</span>
            <svg class="w-5 h-5 text-primary transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="accordion-content mt-2 text-sm hidden leading-relaxed">${item.content}</div>
        </div>
      `;
    });

    setTimeout(() => {
      document.querySelectorAll(".accordion-btn").forEach(btn => {
        btn.addEventListener("click", () => {
          const content = btn.nextElementSibling;
          const icon = btn.querySelector("svg");
          content.classList.toggle("hidden");
          icon.classList.toggle("rotate-180");
        });
      });
    }, 20);
  }

  // Click handlers for role cards
  document.querySelectorAll(".open-roles").forEach(card => {
    card.addEventListener("click", () => {
      const roleKey = card.getAttribute("data-role");
      renderJob(roleKey);
    });
  });

  // Show first one by default
  window.addEventListener("DOMContentLoaded", () => {
    renderJob("marketing_executive");
  });
</script>

<script type="module">
  const modal = document.getElementById("jobApplyModal");
  const openModalBtn = document.getElementById("openModalBtn");
  const closeModalBtn = document.getElementById("closeModalBtn");
  const applicantName = document.getElementById("applicantName");
  const formJobTitle = document.getElementById("formJobTitle");

  openModalBtn.addEventListener("click", (e) => {
    e.preventDefault();
    const jobTitle = document.getElementById("jobTitle").innerText;
    formJobTitle.innerText = `Apply for ${jobTitle}`;
    modal.classList.remove("hidden");
  });

  closeModalBtn.addEventListener("click", () => {
    modal.classList.add("hidden");
  });

  window.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      modal.classList.add("hidden");
    }
  });
</script>

<script>
  $(document).ready(function() {
    $('#jobApplicationForm').on('submit', function(e) {
      e.preventDefault();

      const formData = new FormData(this);

      // Add job title from DOM
      const jobTitle = $('#jobTitle').text().trim();
      $('#hiddenJobTitle').val(jobTitle);
      formData.set('job_title', jobTitle);

      $.ajax({
        url: jobUrl.url,
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        headers: {
          'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        success: function(res) {
          if (res.success) {
            $('#jobApplyModal').addClass('hidden'); // Close the apply form
            $('#thankYouModal').removeClass('hidden'); // Show thank you modal
            $('#jobApplicationForm')[0].reset(); // Reset form
          }
        },
        error: function(err) {
          alert('Submission failed. Please check the form or try again later.');
          console.error(err);
        }
      });
    });

    // Close thank you modal
    $('#closeThankYou').on('click', function() {
      $('#thankYouModal').addClass('hidden');
    });
  });

  let jobUrl = {
    url: "{{ route('new.job.apply') }}",
  }
</script>

@endsection