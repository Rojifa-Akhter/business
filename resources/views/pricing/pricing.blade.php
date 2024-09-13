@extends('form.index')
@section('plans_pricing')
<style>
    body{
        background-color: #fafafa;
    }
    .py-lg-5{
        margin-top:32px;
    }
    .bg-business-primary {
        background-color: #007bff;
    }
    .bg-business-secondary-close {
        background-color: #17a2b8; 
    }
    .text-business-secondary {
        color: #17a2b8;
    }
    .vertical-middle {
        vertical-align: middle;
    }
    .vertical-start {
        vertical-align: top;
    }
    .bg-transparent-1 {
        background-color: rgba(0, 0, 0, 0.1);
    }
    .text-14 {
    font-size: 14px;
    font-family: sans-serif;
    }

    .text-20 {
        font-size: 20px;
    }
    .text-md-24{
        font-size: 24px;
    }
    .align{
        text-align: center;
    }
    .bi-check2{
    color: #007bff;
    }
    .fixed-width {
        width: 30%; /* Adjust this percentage as needed */
        max-width: 400px; /* Adjust this pixel value as needed */
    }
    .img-fit-center {
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
    .embed-responsive {
        border-radius: 0.25rem;
        height: 75px;
        width: 75px;
    }
    .fa-angle-right{
        color: #17a2b8;
    }
    .faq-card-btn{
        margin-left: 10px;
        color: rgb(62, 62, 62);
    }
    .faq-card-btn:hover {
    color: #17a2b8;
    }
    .collapsed {
        cursor: pointer;
    }
    .card-body {
        padding-left: 35px;
    }
</style>

<div class="container custom-container">
    <div class="pb-4 py-lg-5">
        <h2 class="text-center text-strong text-md-down-22 text-theme">Boost Your Business with DOB!</h2>
        <p class="text-center text-md-down-16 line-height-150">Unlock Exclusive Benefits with Our Premium Membership Services - Maximize Your Business Potential <br> with Our 30-Day Money-Back Guarantee</p>
    </div>
</div>
<main class="main-body">
    <div class="container custom-container">
        <div class="membership-plan d-md-down-none">
            <div class="bg-white table-responsive">
                <table class="table table-bordered membership-table">
                    <thead>
                        <tr>
                            <th class="vertical-middle border-bottom-none fixed-width">
                                <h3 class="m-0 text-10 text-primary" style="font-size: 20px;">Top Features &amp; Benefits</h3>
                            </th>
                            <th class="p-0 vertical-start border-bottom-none">
                                <h3 class="p-3 text-center text-20 text-strong text-muted bg-transparent-1" style="font-family: Helvetica;">Lite</h3>
                                <p class="px-3 py-2 mb-0 text-left text-theme" style="font-family: Helvetica; font-size: 16px; font-weight: normal;">Upgrade to Lite - Expand Your Opportunities.</p>
                                <h5 class="mb-2 text-center text-md-24 text-lg-32 text-strong">
                                    $<span class="amount-for-lite">499</span> /
                                    <sub class="duration-for-lite">Year</sub>
                                </h5>
                                <div class="text-center text-14 font-weight text-muted">Less than <span class="text-20 font-weight-light">$42/</span> Month</div>
                            </th>
                            <th class="p-0 vertical-start border-bottom-none">
                                <div class="p-3 px-3 bg-business-primary">
                                    <h3 class="mb-0 text-center text-white text-20 text-strong" style="font-family: Helvetica;">Standard</h3>
                                </div>
                                <p class="px-3 py-3 mb-0 text-left text-theme" style="font-family: Helvetica; font-size: 16px; font-weight: normal;">Step Up to Standard - Stand Out, Uplift Your Success!</p>
                                <h5 class="mb-2 text-center text-md-24 text-lg-32 text-primary text-strong">
                                    $<span class="amount-for-standard">699</span> /
                                    <sub class="duration-for-standard">Year</sub>
                                </h5>
                                <div class="text-center text-14 font-weight-normal text-muted">Less than <span class="text-20 font-weight-light">$59/</span> Month</div>
                            </th>
                            <th class="p-0 vertical-start border-bottom-none">
                                <h3 class="p-3 text-center text-white text-20 text-strong bg-business-secondary-close" style="font-family: Helvetica;">Business</h3>
                                <p class="px-3 py-2 mb-0 text-left text-theme" style="font-family: Helvetica; font-size: 16px; font-weight: normal;">Upgrade to Business - Empower Your Business with the Best.</p>
                                <h5 class="mb-2 text-center text-md-24 text-strong text-business-secondary">
                                    $<span class="amount-for-business">999</span> /
                                    <sub class="duration-for-business">Year</sub>
                                </h5>
                                <div class="text-center text-14 font-weight-normal text-muted">Less than <span class="text-20 font-weight-light">$84/</span> Month</div>
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>Connect with Buyers, Accelerate Deals, Boost Revenue with DOB Premium Services</p>
                                <ul class=&quot;list-unstyled text-14&quot;>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Guaranteed buyers through an exclusive program.</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Tailored services for maximizing sales impact.</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Comprehensive buying leads for successful deals.</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Targeted marketing for effective buyer reach.</li>
                                </ul>
                             " data-original-title="Get Guaranteed Buyers">
                                <span class="membership-feature-title text-18">Guaranteed Buyer Connections</span>
                            </td>
                            <td class="align"><i class="bi bi-check2"></i></td>
                            <td class="align"><i class="bi bi-check2"></i></td>
                            <td class="align"><i class="bi bi-check2"></i></td>
                        </tr>
                        <tr>
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>Be the first choice for buyers with priority search ranking. Attract more buyers and grow your business faster.</p>
                                                            " data-original-title="Stand Out with Priority Search Ranking">
                                <span class="membership-feature-title">Priority Search Ranking</span>
                            </td>
                            <td class="align">Medium Ranking</td>
                            <td class="align">High Ranking</td>
                            <td class="align">Top Ranking</td>
                        </tr>
                        <tr>
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>Attract New Buyers and Grow Your Business with Enhanced Visibility and Effective Promotion.</p>
                                                            " data-original-title="Showcase Your Products to Millions of Buyers">
                            <span class="membership-feature-title">Showcase &amp; Promote Your Products</span>
                            </td>
                            <td class="align"> 100 </td>
                            <td class="align"> 200 </td>
                            <td class="align">500</td>
                        </tr>
                        <tr>
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>Get Noticed First – Display Your Products on Our Homepage for Instant Buyer Attention</p>
                                                            " data-original-title="Feature Your Top or New Product">
                            <span class="membership-feature-title">Feature Your Top or New Product</span>
                            </td>
                            <td class="align"> <i class="bi bi-dash text-14 text-muted"></i> </td>
                            <td class="align"><i class="bi bi-check2"></i></td>
                            <td class="align"><i class="bi bi-check2"></i></td>
                        </tr>
                        <tr>
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>Increase your business opportunities by being the first to connect with potential customers.</p>
                                                            <ul class=&quot;list-unstyled text-14&quot;>
                                                                <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Instantly connect with Potential Buyers through their RFQs.</li>
                                                                <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Respond faster and win more business opportunities.</li>
                                                            </ul>
                                                            " data-original-title="Access to Buying Leads">
                            <span class="membership-feature-title">Access to Buying Leads</span>
                            </td>
                            <td class="align"> Limited Access </td>
                            <td class="align">Instant Access</td>
                            <td class="align">Instant Access</td>
                        </tr>
                        <tr>
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>Grow Your Business by Engaging with More Buying Leads / RFQs from Buyers. Connect with More Buyers - Close More Deals.</p>
                                                            " data-original-title="Inquiry Limit on Buying Leads (Monthly)">
                            <span class="membership-feature-title">Inquiry Limit on Buying Leads (Monthly)</span>
                            </td>
                            <td class="align"> 100 Inquiries </td>
                            <td class="align">200 Inquiries</td>
                            <td class="align">500 Inquiries</td>
                        </tr>
                        <tr>
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>Stay Exclusive - Don't Show Your Competitor's Products on Your Product Details Page.</p>
                                <ul class=&quot;list-unstyled text-14&quot;>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Optimize Visibility with Exclusive Product Displays</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Keeps Potential  Buyers Focused on Your Products Only</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Simplify Buyer Choices - Boost Your Conversions</li>
                                </ul>
                                " data-original-title="Maximize Sales with Exclusive Product Display">                            
                                <span class="membership-feature-title">Exclusive Product Display Page</span>
                            </td>
                            <td class="align"> <i class="bi bi-dash text-14 text-muted"></i> </td>
                            <td class="align"><i class="bi bi-check2"></i></td>
                            <td class="align"><i class="bi bi-check2"></i></td>
                        </tr>
                        <tr>
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>DOB adds new products all the time, which will push your product off the 1st page. But, by using the ' Top-Rank ' option, you can uplift your product at the top, again &amp; again.</p>
                                <ul class=&quot;list-unstyled text-14&quot;>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Lifts Your Products Above The Rest.</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Gain an Advantage Over Competitors.</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Keep Your Products in The Spotlight.</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Get More out of Your Investment.</li>
                                </ul>
                                " data-original-title="Keep Your Product at the Top with 'Top-Rank' Option">
                            <span class="membership-feature-title">Top-Rank Your Products</span>
                            </td>
                            <td class="align">2 Times / Month</td>
                            <td class="align">4 Times / Month</td>
                            <td class="align"> 6 Times / Month</td>
                        </tr>
                        <tr>
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>DOB directory is regularly updated with new businesses. This means your business may not always be on the 1st page. However, with the 'Top-Rank' option, you can repeatedly feature your business at the top, ensuring your brand stays prominent.</p>" data-original-title="Ensure Top Business Listing with 'Top-Rank' Option">
                            <span class="membership-feature-title">Top-Rank Your Business Listing</span>
                            </td>
                            <td class="align">2 Times / Month</td>
                            <td class="align">4 Times / Month</td>
                            <td class="align"> 6 Times / Month</td>
                        </tr>
                        <tr >
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>Get noticed in global search engines like Google, Bing, and Yahoo. Expand your reach and accessibility to achieve business success.</p>" data-original-title="High Visibility on Google, Bing &amp; Yahoo.">
                            <span class="membership-feature-title">High Visibility on Google, Bing &amp; Yahoo.</span>
                            </td>
                            <td class="align"> <i class="bi bi-dash text-14 text-muted"></i> </td>
                            <td class="align"> <i class="bi bi-check2"></i></td>
                            <td class="align"> <i class="bi bi-check2"></i> </td>
                        </tr>
                        <tr>
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>Trade alerts will help you stay informed about market updates and discover business opportunities, which are essential for maintaining a competitive advantage.</p>
                                <ul class=&quot;list-unstyled text-14&quot;>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Stay Informed with Timely Updates.</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Make Informed Decisions.</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Stay Relevant in The Market.</li>
                                </ul>
                                " data-original-title="Take Advantage of Trade Alerts for Business Growth">
                                <span class="membership-feature-title"> B2B Trade Alert</span>
                            </td>
                            <td class="align"> <i class="bi bi-dash text-14 text-muted"></i> </td>
                            <td class="align"> <i class="bi bi-check2"></i></td>
                            <td class="align"> <i class="bi bi-check2"></i> </td>
                        </tr>
                        <tr >
                            <td data-toggle="popover" data-trigger="hover" data-placement="bottom" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>Supercharge Your Social Media Marketing on Facebook / Twitter / Instagram / Pinterest with DOB's premium plans.</p>
                                <ul class=&quot;list-unstyled text-14&quot;>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> High-Quality Branded Posts</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Content Creation &amp; Graphic Design</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Hashtags, Captions &amp; Emojis</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Enhance Brand Visibility and Recognition.</li>
                                </ul>
                                <p class=&quot;mb-2&quot;>Don't miss this golden opportunity to boost your brand's reach and stay competitive. Elevate your business with our monthly plans:</p>
                                <ul class=&quot;pl-3&quot;>
                                    <li>Lite Plan: 1 Platform - 2 Posts</li>
                                    <li>Standard Plan: 2 Platforms - 4 Posts</li>
                                    <li>Business Plan: 3 Platforms - 9 Posts</li>
                                </ul>
                            " data-original-title="Social Media Marketing for Your Business">
                                <span class="membership-feature-title">Social Media Marketing for Your Business</span>
                            </td>
                            <td class="align">2 Posts / Month</td>
                            <td class="align">4 Posts / Month</td>
                            <td class="align">9 Posts / Month</td>
                        </tr>
                        <tr>
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>Enhance Your Brand Visibility, Credibility and Engagement by Showcasing Your Own Facebook, Twitter, and LinkedIn Profiles</p>
                                                            " data-original-title="Showcase Your Own Social Media Profiles">
                            <span class="membership-feature-title">Show Your Social Media Profiles</span>
                            </td>
                            <td class="align"> <i class="bi bi-check2"></i></td>
                            <td class="align"> <i class="bi bi-check2"></i></td>
                            <td class="align"> <i class="bi bi-check2"></i> </td>
                        </tr>
                        <tr>
                        <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>Establish Industry Authority, Enhance Brand Reputation &amp; Achieve Success Through Powerful Content Marketing Strategies.</p>
                           <ul class=&quot;list-unstyled text-14&quot;>
                                <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Write SEO Optimized Content</li>
                                <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Professionally Designed Featured Image</li>
                                <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Promote The Blog</li>
                           </ul>
                            " data-original-title="Expert Blog Promotion &amp; Content Marketing">
                            <span class="membership-feature-title">Blog Promotion &amp; Content Marketing</span>
                        </td>
                        <td class="align"> 1 Blog / Month </td>
                        <td class="align"> 2 Blog / Month </td>
                        <td class="align"> 2 Blogs / Month </td>
                        </tr>
                        <tr>
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>Gain a Competitive Edge and Attract Global Buyers with the DOB's Verified Seal.</p>
                                <ul class=&quot;list-unstyled text-14&quot;>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Your Symbol of Trust and Authenticity.</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Stand Out and Outperform Competitors.</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Get More Sales by Making Buyers Feel Safe.</li>
                                    <li class=&quot;mb-1 d-flex&quot;><i class=&quot;icofont-check-alt mr-1 mt-1&quot;></i> Build a Strong &amp; Reputable B2B Brand.</li>
                                </ul>
                                " data-original-title="Boost Trust with DOB's Verified Seal">
                                <span class="membership-feature-title">Boost Trust with DOB's Verified Seal</span>
                            </td>
                            <td class="align"> <i class="bi bi-dash text-14 text-muted"></i> </td>
                            <td class="align"> <i class="bi bi-check2"></i></td>
                            <td class="align"> <i class="bi bi-check2"></i> </td>
                        </tr>
                        <tr>
                            <td data-toggle="popover" data-trigger="hover" data-placement="top" data-popover-custom-classes="popover-dark popover-medium" data-html="true" title="" data-content="<p class=&quot;mb-2&quot;>At DOB, we charge a $50 one-time setup fee to seamlessly integrate enhanced features and Premium Services, ensuring optimal business success.</p>
                                                            " data-original-title="One-Time Setup Fee: $50">
                            <span class="membership-feature-title">One-Time Setup Fee: $50</span>
                            </td>
                            <td class="align">Included</td>
                            <td class="align">Included</td>
                            <td class="align">Included</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="border-0"></td>
                            <td class="text-center">
                                <div class="py-3">
                                <a href="#" data-toggle="modal" data-backdrop="static" data-target="#popupLoginFormModal" class="btn text-nowrap btn-primary btn-lg-down-small px-lg-4 contact-for-lite-package">Contact Now</a>
                            </div>
                            </td>
                            <td class="text-center">
                                <div class="py-3">
                                <a href="#" data-toggle="modal" data-backdrop="static" data-target="#popupLoginFormModal" class="btn text-nowrap btn-primary btn-lg-down-small px-lg-4 contact-for-standard-package">Contact Now</a>
                            </div>
                            </td>
                            <td class="text-center">
                                <div class="py-3">
                                <a href="#" data-toggle="modal" data-backdrop="static" data-target="#popupLoginFormModal" class="btn text-nowrap btn-primary btn-lg-down-small px-lg-4 contact-for-business-package">Contact Now</a>
                            </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        {{-- contact and logo --}}
        <div class="p-3 my-4 bg-white border p-lg-5 my-lg-5">
            <div class="row g-3">
                <div class="col-lg-6 col-xl-5">
                    <h3 class="mb-3 font-weight-bold">Need an Enterprise or Custom <span class="d-lg-block"> Business Plan?</span></h3>
                    <p class="mb-3 font-normal text-20 line-height-150">Get in Touch with the DOB Team to Create the Perfect Fit for Your Business.</p>
                    <a href="#" data-toggle="modal" data-backdrop="static" data-target="#popupLoginFormModal" class="btn text-nowrap btn-primary btn-lg-down-small px-lg-4">Contact Now</a>
                </div>
                <div class="col-lg-6 offset-xl-1">
                    <div class="row g-3 align-items-center">
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img src="https://b2bmap.com/public/top-company-logo/aslan-chemical-co-ltd.jpg" class="img-fit-center">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img src="https://b2bmap.com/public/top-company-logo/atl-global-co-ltd.jpg" class="img-fit-center">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img src="https://b2bmap.com/public/top-company-logo/engrop-sports.jpg" class="img-fit-center">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="embed-responsive embed-responsive-16by9" style="background: none;">
                                <img src="https://b2bmap.com/public/top-company-logo/yves-javanni-1696403543.png" class="img-fit-center">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img src="https://b2bmap.com/public/top-company-logo/hongkong-bitfoic-electronic.jpg" class="img-fit-center">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img src="https://b2bmap.com/public/top-company-logo/jayda-industry-co-limited.jpg" class="img-fit-center">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img src="https://b2bmap.com/public/top-company-logo/me-world.jpg" class="img-fit-center">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img src="https://b2bmap.com/public/top-company-logo/ningbo-hengtuo-motor-trade.jpg" class="img-fit-center">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img src="https://b2bmap.com/public/top-company-logo/nur-hongkong.jpg" class="img-fit-center">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img src="https://b2bmap.com/public/top-company-logo/haplock-global-impex-1696136106.jpg" class="img-fit-center">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img src="https://b2bmap.com/public/top-company-logo/taizhou-peek-china-company.jpg" class="img-fit-center">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img src="https://b2bmap.com/public/top-company-logo/technogen-enterprise.jpg" class="img-fit-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- dropdown --}}
        <div class="px-0 mx-auto col-lg-8">
            <p class="m-0 text-center text-uppercase">We're here to help</p>
            <h2 class="mb-4 text-center text-theme">Frequently Ask Questions</h2>
            <div id="accordion" class="mb-3">
                <div class="mb-3 card faq-card">
                    <div class="bg-white card-header collapsed" data-toggle="collapse" data-target="#faqCardContent1" aria-controls="faqCardContent1" aria-expanded="false">
                        <span class="faq-card-arrow"><i class="fa fa-angle-right"></i></span>
                        <span class="faq-card-btn">What is DOB Premium Services, and what benefits does it offer?</span>
                    </div>
                    <div id="faqCardContent1" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <p>DOB Premium Services are paid services specially tailored to Small and Medium Enterprises (SMEs), providing a suite of premium features and services that ensure effective online marketing, easy discoverability in searches, quick business connection and communication, and global visibility on search engines.</p>
                            <p>It's perfect for businesses looking to grow fast, as it's designed to boost online presence, attract more customers, and build a strong brand reputation. With features like a trust badge and social media boost, it becomes a valuable tool for accelerating growth in the digital world.</p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="mb-3 card faq-card">
                    <div class="bg-white card-header collapsed" data-toggle="collapse" data-target="#faqCardContent10" aria-controls="faqCardContent10" aria-expanded="true">
                    <span class="faq-card-arrow"><i class="fa fa-angle-right"></i></span>
                    <span class="faq-card-btn">Tell me more about the business website offered with the Premium Membership.</span>
                    </div>
                    <div id="faqCardContent10" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                        <p>With DOB Premium Membership, you get your own modern and mobile-responsive business website with a unique domain (e.g., www.YourCompanyName.com). </p>
                        <p> Your website template is optimized for SEO, ensuring maximum visibility. It includes ongoing script updates, maintenance, and 24/7 accessibility.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3 card faq-card">
                    <div class="bg-white card-header collapsed" data-toggle="collapse" data-target="#faqCardContent2" aria-controls="faqCardContent2" aria-expanded="true">
                    <span class="faq-card-arrow"><i class="fa fa-angle-right"></i></span>
                    <span class="faq-card-btn">What is the 'Top-Rank' option, and how does it benefit my products and business listing?</span>
                    </div>
                    <div id="faqCardContent2" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                        <p>The 'Top-Rank' option allows you to keep your products and business listing at the top, ensuring they stay visible to potential buyers. This feature provides a competitive advantage by keeping your products and brand in the spotlight, even as new products and businesses are added to DOB.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3 card faq-card">
                    <div class="bg-white card-header collapsed" data-toggle="collapse" data-target="#faqCardContent3" aria-controls="faqCardContent3" aria-expanded="true">
                    <span class="faq-card-arrow"><i class="fa fa-angle-right"></i></span>
                    <span class="faq-card-btn">How does the Exclusive Product Display Page work, and what advantages does it offer?</span>
                    </div>
                    <div id="faqCardContent3" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                        <p>The Exclusive Product Display Page ensures that only your products are showcased on your product details page, eliminating competitor comparisons. This feature simplifies buyer choices, boosts conversions, and maximizes the visibility of your products.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3 card faq-card">
                    <div class="bg-white card-header collapsed" data-toggle="collapse" data-target="#faqCardContent4" aria-controls="faqCardContent4" aria-expanded="true">
                    <span class="faq-card-arrow"><i class="fa fa-angle-right"></i></span>
                    <span class="faq-card-btn">What is the significance of the DOB Verified Seal, and how does it benefit my business?</span>
                    </div>
                    <div id="faqCardContent4" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                        <p>The DOB Verified Seal is a trust symbol that makes your business stand out and builds a strong B2B brand. Businesses with this seal experience a 78% increase in trust and credibility, leading to a 30% boost in leads and higher conversion rates. Having the Verified Seal not only makes your business more trusted by potential customers but also improves search rankings and attracts more leads, making it a valuable asset for businesses of all sizes.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3 card faq-card">
                    <div class="bg-white card-header collapsed" data-toggle="collapse" data-target="#faqCardContent6" aria-controls="faqCardContent6" aria-expanded="true">
                    <span class="faq-card-arrow"><i class="fa fa-angle-right"></i></span>
                    <span class="faq-card-btn">How does the billing process work, and how does DOB keep my payment details safe?</span>
                    </div>
                        <div id="faqCardContent6" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                        <p>At DOB, we prioritize straightforward and secure billing. Rest assured, for renewals, we won't charge your credit card without prior notification. We provide clear invoices for each payment, keeping your payment info safe and ensuring a transparent and trustworthy experience.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3 card faq-card">
                    <div class="bg-white card-header collapsed" data-toggle="collapse" data-target="#faqCardContent5" aria-controls="faqCardContent5" aria-expanded="true">
                    <span class="faq-card-arrow"><i class="fa fa-angle-right"></i></span>
                    <span class="faq-card-btn">How does the renewal process work, and will I be notified before being charged for the next billing year?</span>
                    </div>
                    <div id="faqCardContent5" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                        <p>To renew, we'll remind you before the billing year ends. You can choose to keep your current plan, upgrade, or cancel. If no action is taken, we'll send you a notification before charging for the next billing year, keeping you informed and in control of your renewal process.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3 card faq-card">
                    <div class="bg-white card-header collapsed" data-toggle="collapse" data-target="#faqCardContent7" aria-controls="faqCardContent7" aria-expanded="true">
                    <span class="faq-card-arrow"><i class="fa fa-angle-right"></i></span>
                    <span class="faq-card-btn">What happens if I do not renew my DOB Premium Service Plan?</span>
                    </div>
                    <div id="faqCardContent7" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                        <p>If you choose not to renew your DOB Premium Service Plan, you will be switched to a free member, making it harder for buyers to find your business or products. You'll lose exclusive features like top search ranking, product promotion, brand identity, social media marketing, DOB Verified Seal and more, impacting business growth and product visibility.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3 card faq-card">
                    <div class="bg-white card-header collapsed" data-toggle="collapse" data-target="#faqCardContent8" aria-controls="faqCardContent8" aria-expanded="true">
                    <span class="faq-card-arrow"><i class="fa fa-angle-right"></i></span>
                    <span class="faq-card-btn">How does the 30-day money-back guarantee work?</span>
                    </div>
                    <div id="faqCardContent8" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                        <p>We are committed to your satisfaction and business growth. If you find that our service doesn't meet your expectations, we kindly request you to contact us at mail@DOB.com within 30 days of payment.</p>
                        <p>Please provide your payment details, reasons for the refund, and any supporting documents. We aim to process refunds within 7 business days to ensure a smooth experience. Please refer to our Terms of Use for further details.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3 card faq-card">
                    <div class="bg-white card-header collapsed" data-toggle="collapse" data-target="#faqCardContent9" aria-controls="faqCardContent9" aria-expanded="true">
                    <span class="faq-card-arrow"><i class="fa fa-angle-right"></i></span>
                    <span class="faq-card-btn">Why choose DOB for my business, and how does it help growth at a nominal cost?</span>
                    </div>
                    <div id="faqCardContent9" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                        <p>Choose DOB for cost-effective B2B services that fuel your business growth. Our commitment extends to businesses of all sizes, especially SMEs. Take advantage of our SME business friendly platform, smooth navigation, and dedication to your success.</p>
                        <p>With a substantial user base and cost-effective strategies, DOB facilitates your business to connect with potential buyers or partners, expanding operations at a nominal cost. Connect, grow, and achieve success with DOB.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection