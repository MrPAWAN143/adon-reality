@extends('Pages.layouts.app')
@section('metadata')
<title>Adon Realty - Terms and Conditions</title>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@endsection

@section('content')

<section class="max-w-[1100px] mx-auto px-4 md:px-0 pb-2 pt-1">
     <x-page-path class="path" path=<div><a href="{{ route('home') }}">Home</a> <x-forkawesome-angle-right class="w-4 h-4 inline mr-[-5px] ml-0 text-center items-center" /> <a class="ml-[-5px]" href="{{ route('terms-and-conditions') }}">Terms and Conditions</a> </div>
</section>
<section class=" bg-white ">

    <div class="max-w-[1100px] mx-auto px-4  gap-8 items-center " style="padding-top: 1rem; padding-bottom: 2rem;">

        <h1 class="text-2xl font-bold mb-2">Terms & Conditions</h1>
        <p class="text-sm text-txBlack mb-6">
            <strong>Effective Date:</strong> [Insert Date]<br>
            Welcome to Adon Realty. These Terms & Conditions ("Terms") govern your access and use of our website, services, and investment platform. By using our site, you agree to be bound by these Terms. Please read them carefully before proceeding.
        </p>

        <!-- Each Section -->
        <div class="space-y-8 text-txBlack">

            <!-- 1 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-user-shield text-primary mt-1"></i>
                    User Eligibility & Account
                </h2>
                <ul class="list-disc list-inside text-sm mt-2">
                    <li>You must be 18 years or older to use this site or invest in real estate projects through Adon Realty.</li>
                    <li>Users are responsible for maintaining the confidentiality of their account credentials.</li>
                    <li>Any activity under your account will be considered your responsibility.</li>
                </ul>
            </div>

            <!-- 2 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-building text-primary mt-1"></i>
                    Property Information & Accuracy
                </h2>
                <ul class="list-disc list-inside text-sm mt-2">
                    <li>All information, visuals, and data on projects are provided for general guidance.</li>
                    <li>While we strive for accuracy, Adon Realty does not guarantee the completeness or timeliness of project data, returns, or developer information.</li>
                    <li>Investors are advised to perform independent due diligence.</li>
                </ul>
            </div>

            <!-- 3 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-calendar-check text-primary mt-1"></i>
                    Custom Orders / Site Visits
                </h2>
                <ul class="list-disc list-inside text-sm mt-2">
                    <li>Custom investment opportunities, site visits, and consultations are available upon request.</li>
                    <li>These may include investment strategies, bulk investment offerings, or corporate partnerships.</li>
                    <li>Site visits must be scheduled in advance and are subject to availability.</li>
                </ul>
            </div>

            <!-- 4 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-hand-holding-dollar text-primary mt-1"></i>
                    Investment Processing
                </h2>
                <ul class="list-disc list-inside text-sm mt-2">
                    <li>Investment applications are subject to internal review based on eligibility and compliance.</li>
                    <li>Final allotment is subject to availability and completion of documentation.</li>
                    <li>Adon Realty reserves the right to reject any application at its discretion.</li>
                </ul>
            </div>

            <!-- 5 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-house-circle-check text-primary mt-1"></i>
                    Project Delivery & Possession
                </h2>
                <ul class="list-disc list-inside text-sm mt-2">
                    <li>Project possession dates are indicative and subject to developer timelines and third-party defaults.</li>
                    <li>Adon Realty is not liable for delays caused by developers or unforeseen circumstances.</li>
                </ul>
            </div>

            <!-- 6 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-money-bill-wave text-primary mt-1"></i>
                    Return & Refund Policy
                </h2>
                <ul class="list-disc list-inside text-sm mt-2">
                    <li>Investments are non-refundable post-lock-in unless otherwise stated in the agreement.</li>
                    <li>In case of project cancellation or significant delay, refund policies will be governed by developer terms and legal frameworks.</li>
                    <li>All refund-related disputes shall be resolved as per contractual terms.</li>
                </ul>
            </div>

            <!-- 7 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-credit-card text-primary mt-1"></i>
                    Payments & Billing
                </h2>
                <ul class="list-disc list-inside text-sm mt-2">
                    <li>All payments must be made via bank transfer, UPI, cheque, or approved online gateways.</li>
                    <li>Applicable government taxes (GST, TDS, etc.) will be added to the invoice.</li>
                    <li>EMI or milestone payment options are available for selected projects.</li>
                </ul>
            </div>

            <!-- 8 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-tags text-primary mt-1"></i>
                    Offers, Discounts & Promotions
                </h2>
                <ul class="list-disc list-inside text-sm mt-2">
                    <li>Any promotional schemes are time-bound and cannot be clubbed with other offers.</li>
                    <li>Adon Realty reserves the right to modify or withdraw offers without prior notice.</li>
                </ul>
            </div>

            <!-- 9 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-shield-halved text-primary mt-1"></i>
                    Privacy & Data Protection
                </h2>
                <ul class="list-disc list-inside text-sm mt-2">
                    <li>All user data is handled as per our Privacy Policy.</li>
                    <li>We secure user encryption and do not sell or share user data with third parties without consent.</li>
                    <li>Users may unsubscribe from communications at any time.</li>
                </ul>
            </div>

            <!-- 10 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-copyright text-primary mt-1"></i>
                    Intellectual Property
                </h2>
                <p class="text-sm mt-2">
                    All content including logos, visuals, project names, and descriptions belong to Adon Realty or its partners. Unauthorized use, copying, or distribution is strictly prohibited.
                </p>
            </div>

            <!-- 11 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-ban text-primary mt-1"></i>
                    Prohibited Use
                </h2>
                <ul class="list-disc list-inside text-sm mt-2">
                    <li>Users agree not to engage in fraud, abusive platform access, or harassment.</li>
                    <li>Violation of these Terms may result in account suspension, permanent account termination.</li>
                </ul>
            </div>

            <!-- 12 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-cubes text-primary mt-1"></i>
                    Product Availability
                </h2>
                <ul class="list-disc list-inside text-sm mt-2">
                    <li>Project availability is subject to real-time demand & booking status, legal clearances, and developer updates.</li>
                    <li>Not all projects listed may be available at the time of enquiry.</li>
                </ul>
            </div>

            <!-- 13 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-envelope-open-text text-primary mt-1"></i>
                    Communication
                </h2>
                <ul class="list-disc list-inside text-sm mt-2">
                    <li>By creating an account, you agree to receive updates via email, SMS, or WhatsApp for investment opportunities and project progress.</li>
                    <li>You may opt out by using the unsubscribe settings or by contacting support.</li>
                </ul>
            </div>

            <!-- 14 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-rotate text-primary mt-1"></i>
                    Changes to Terms
                </h2>
                <ul class="list-disc list-inside text-sm mt-2">
                    <li>Adon Realty reserves the right to update these Terms without prior notice.</li>
                    <li>Users are advised to review these Terms periodically for any changes.</li>
                </ul>
            </div>

            <!-- 15 -->
            <div>
                <h2 class="font-semibold text-lg flex items-start gap-2">
                    <i class="fa-solid fa-headset text-primary mt-1"></i>
                    Contact Us
                </h2>
                <p class="text-sm mt-2">
                    For questions, clarifications, or dispute resolution, please contact us at:<br>
                    📞 +91-xxxxxxxxxx<br>
                    ✉️ support@adonrealty.com<br>
                    🏢 Registered Office: [Your Office Address Here]
                </p>
            </div>
        </div>
</section>


<x-contact-us-form heading="Still Have a Question?" subheading="Have questions or ready to take the next step? Whether you’re looking to buy, rent, or invest, our team is here to guide you every step of the way." />


@endsection