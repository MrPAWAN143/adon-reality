@extends('frontend.layouts.app')
@section('metadata')
<title>Terms & Condition</title>
@endsection
@section('styles') 
<link rel="stylesheet" href="{{ asset('assets/css/terms-and-condition.css') }}">

@endsection

@section('content')  

        <div class=" w-[96%] max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="">
                <h1 class="text-3xl font-bold py-4">Terms & Conditions</h1>
                <h2 class="text-sm font-bold text-[#540313]">Effective Date: [Insert Date]</h2>
                <p class="text-sm">Welcome to Adon Realty. These Terms & Conditions ("Terms") govern your access and use of our website, services, and investment platform. By
                    using our services, you agree to be bound by these Terms. Please read them carefully before proceeding.</p>
            </div>
            <div class="">
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-regular fa-user text-sm bg-[#5403132e] px-3 py-2.5 rounded-full"></i>User Eligibility & Account</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li>You must be 18 years or older to use this site or invest in real estate projects through Adon Realtyq</li>
                    <li> Users are responsible for maintaining the confidentiality of their account credentialsq</li>
                    <li>Any activity under your account will be considered your responsibility</li>
                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-scroll text-sm bg-[#5403132e] px-2.5 py-2.5 rounded-full"></i>Property Information & Accuracy</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li>All information, visuals, and data on projects are provided for general guidance</li>
                    <li>  While we strive for accuracy, Adon Realty does not guarantee the completeness or timeliness of project data, returns, or developer
                        informationq</li>
                    <li> Investors are advised to perform independent due diligence.</li>
                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-hospital-user text-sm bg-[#5403132e] px-2.5 py-2.5 rounded-full"></i>Custom Orders / Site Visits</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li>Custom investment opportunities, site visits, and consultations are available upon request</li>
                    <li> These may include tailored investment strategies, bulk investment offerings, or corporate partnershipsq</li>
                    <li>Site visits must be scheduled in advance and are subject to availability</li>
                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-hand-holding-dollar text-sm bg-[#5403132e] px-2.5 py-2.5 rounded-full"></i>Investment Processing</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li>Investment applications will be reviewed and approved based on eligibility and compliance</li>
                    <li> Final allocation is subject to availability and completion of documentationq</li>
                    <li>Adon Realty reserves the right to reject applications at its sole discretion.</li>
                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-dolly text-sm bg-[#5403132e] px-2.5 py-2.5 rounded-full"></i>Project Delivery & Possession</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li>Delivery timelines are provided by the developer and are indicative in nature</li>
                    <li> Adon Realty is not liable for delays due to force majeure events, regulatory approvals, or third party defaultsq
                    </li>
                    <li>Possession terms and handover schedules are detailed in individual agreements.</li>
                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-right-left text-sm bg-[#5403132e] px-2.5 py-2.5 rounded-full"></i>Return & Refund Policy</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li> Investments are non refundable post lock in unless otherwise stated in the agreement</li>
                    <li> In case of project cancellation or significant delay, refund policies will be governed by developer terms and legal frameworksq</li>
                    <li>All refund related disputes shall be resolved as per contractual terms.</li>
                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-credit-card text-sm bg-[#5403132e] px-3 py-2.5 rounded-full"></i>Payments & Billing</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li>All payments must be made via bank transfer, UPI, cheque, or approved online gateways</li>
                    <li> Applicable government taxes (GST, TDS, etc.) will be added to the invoice</li>
                    <li>EMI or milestone payment options are available for selected projects.</li>
                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-gift text-sm bg-[#5403132e] px-2.5 py-2.5 rounded-full"></i>Offers, Discounts & Promotions</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li>Any promotional schemes are time bound and cannot be clubbed with other offers</li>
                    <li>Adon Realty reserves the right to modify or withdraw offers without prior noticeq
                    </li>
                    <li>Discounts are applicable only upon successful completion of investment formalities.</li>
                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-lock text-sm bg-[#5403132e] px-3 py-2.5 rounded-full"></i>Privacy & Data Protection</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li>All user data is handled as per our Privacy Policy</li>
                    <li> We ensure secure encryption and do not sell or share user data with third parties without consentq
                    </li>
                    <li> Users may opt out of marketing communications at any time.</li>
                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-camera-retro text-sm bg-[#5403132e] px-2.5 py-2.5 rounded-full"></i>Intellectual Property</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li>All content including logos, visuals, project names, and descriptions belong to Adon Realty or its partnersq</li>
                    <li>Unauthorized use, duplication, or distribution is strictly prohibited.</li>
                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-xmark text-sm bg-[#5403132e] px-3 py-2.5 rounded-full"></i>Prohibited Use</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li>Users shall not engage in fraudulent activity, abuse platform access, or misrepresent their investment intentq</li>
                    <li>Any attempt to hack, tamper, or extract platform data will result in permanent account termination.</li>

                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-box text-sm bg-[#5403132e] px-3 py-2.5 rounded-full"></i>Product Availability</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li>Project availability is subject to change based on booking status, legal clearances, and developer updatesq</li>
                    <li> Not all listed properties may be available at the time of your inquiry</li>

                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-envelope text-sm bg-[#5403132e] px-2.5 py-2.5 rounded-full"></i>Communication</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li>By registering, you consent to receive updates via email, SMS, or WhatsApp for investment opportunities and project progressq</li>
                    <li>You may opt out anytime via your account settings or by contacting support.</li>

                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-chart-column text-sm bg-[#5403132e] px-2.5 py-2.5 rounded-full"></i>Changes to Terms</h1>
                <ul class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <li>Adon Realty reserves the right to update these Terms without prior noticeq
                    </li>
                    <li> Users are advised to review the Terms periodically for changes</li>

                </ul>
                <h1 class="flex items-center text-xl font-bold py-4 gap-3 "><i class="fa-solid fa-phone text-sm bg-[#5403132e] px-2.5 py-2.5 rounded-full"></i>Contact Us</h1>
                <div class="list-disc  w-[96%] lg:w-[90%] mx-auto text-sm">
                    <h1>For questions, clarifications, or dispute resolution, please contact us at:</h1>
                    <h2>✉️support@adonrealty.com</h2>
                    <h2>📞 +91-XXXXXXXXXX</h2>
                    <h2>📍Registered Office: [Your Office Address Here]</h2>

                </div>
            </div>
        </div>

        <div class="py-10"></div>

@endsection
