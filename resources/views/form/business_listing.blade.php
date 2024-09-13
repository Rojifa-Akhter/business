@extends('form.index')
@section('business')
<section class="mb-4 section-bg"> <!-- Add class for section background color -->
    <div class="container px-0 d-flex justify-content-center align-items-center">
        <div class="px-3 mx-auto col-xl-11 px-lg-0">
            <div class="mb-5 auth-box">
                <div class="row">
                    <!-- Left Side Content -->
                    <div class="order-1 col-lg-6 d-flex flex-column justify-content-between order-lg-0">
                        <div class="px-4 pt-3 pb-4 pt-lg-4 pl-lg-5 h-lg-100 border-lg-down-top border-3px">
                            <div class="mb-4 text-center d-lg-down-none">
                                <a class="mb-0 mr-0 navbar-brand" href="">
                                    <img src="img/logo.png" alt="DOB" class="mx-auto img-fluid d-block">
                                </a>
                                <h5 class="text-lg-18 line-height-120">
                                    List Your Business on Our 
                                    <br> Business Directory & DOB Marketplace
                                </h5>
                            </div>
                            <div class="mb-4">
                                <ul class="nav nav-tabs material-tab" id="buyerSellerTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-18 text-lg-20" id="supplier-tab" data-bs-toggle="tab" data-bs-target="#supplierTabContent" type="button" role="tab" aria-controls="supplierTabContent" aria-selected="false">Supplier</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-18 text-lg-20 active" id="buyer-tab" data-bs-toggle="tab" data-bs-target="#buyerTabContent" type="button" role="tab" aria-controls="buyerTabContent" aria-selected="true">Buyer</button>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="mb-3 text-20 text-strong">Why Join DOB?</h4>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade" id="supplierTabContent" role="tabpanel" aria-labelledby="supplier-tab">
                                    <ul class="pl-3 pl-lg-4">
                                        <li class="mb-2">Market products to verified buyers effectively.</li>
                                        <li class="mb-2">Connect directly with millions of DOB buyers.</li>
                                        <li class="mb-2">Boost online visibility, attract targeted buyers.</li>
                                        <li class="mb-2">Receive inquiries, sell directly, do more business.</li>
                                        <li class="mb-2">Get new leads from DOB marketplace, maximize sales.</li>
                                        <li class="mb-2">Digitize DOB marketing, grow business, sell directly.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade show active" id="buyerTabContent" role="tabpanel" aria-labelledby="buyer-tab">
                                    <ul class="pl-3 pl-lg-4">
                                        <li class="mb-2">Source products from qualified suppliers worldwide.</li>
                                        <li class="mb-2">Find product details and compare offers easily.</li>
                                        <li class="mb-2">Meet custom buy requirements, trade effortlessly.</li>
                                        <li class="mb-2">Request samples and quotes directly from suppliers.</li>
                                        <li class="mb-2">Save time, effort & money by comparing products and quotes.</li>
                                        <li class="mb-2">Expand sourcing channel and secure supply chain.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-4">
                                <img src="https://b2bmap.com/public/images/buyer-seller-business-listing.png" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Side Content -->
                    <div class="col-lg-6">
                        <div class="px-4 pt-4 shadow pb-lg-4 shadow-lg-down-none h-lg-100">
                            {{-- p-3 bg-white p-lg-0 pr-lg-5 border-lg-right border-lg-down --}}
                            <div class="pb-3 mb-3 auth-title mb-lg-4 border-bottom">
                                <h2 class="mb-1 fw-bold text-1612 text-lg-20" style="color: #000;">
                                    <span class="d-none d-lg-inline">Join Free to DOB</span>
                                    <span class="d-inline d-lg-none">Join Free to Business Listing Directory & DOB Business Portal</span>
                                </h2>
                                <h5 class="m-0 text-16 d-none d-lg-inline" style="color: #000;">Use Our Simple Business Listing Form to Get Listed & Grow</h5>
                            </div>
                            
                                                                
                            <div class="auth-info registration-form dark-placeholder">
                                <form action="form.business_listing" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group d-flex">
                                        <label for="member_type" class="form-label me-4">I am:</label>
                                        <div class="d-flex">
                                            <div class="form-check me-4">
                                                <input type="radio" name="member_type" value="2" class="form-check-input" id="seller">
                                                <label class="form-check-label" for="seller">Seller</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" name="member_type" value="1" class="form-check-input" id="buyer" data-target="#businessTypeForBuyer">
                                                <label class="form-check-label" for="buyer">Buyer</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <input type="text" name="company" id="company" placeholder="Please Enter Your Company Name" class="form-control rounded-0">
                                    </div>
                                    <div class="mb-4 form-group">
                                        <select class="form-control" id="country_id" name="country_id" required>
                                            <option value="">--Select Country--</option>
                                            @foreach($countries as $country)
                                                <option value="{{ $country->id }}" data-phonecode="{{ $country->phonecode }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <select class="form-control" id="state_id" name="state_id" required>
                                            <option value="">Select State</option>
                                            @foreach($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <div class="row">
                                            <div class="col-3">
                                                <select name="title" id="title" class="form-control rounded-0">
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Ms.">Ms.</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" name="name" id="name" placeholder="Please Enter Your Name" class="form-control rounded-0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <input type="email" name="email" id="email" placeholder="Please Enter Your Email Address" class="form-control rounded-0">
                                    </div>
                                    <div class="mb-4 form-group">
                                        <div class="row">
                                            <div class="col-3">
                                                <input type="text" class="form-control" id="phonecode" name="phonecode" required readonly>
                                            </div>
                                            <div class="col">
                                                <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" class="form-control rounded-0 prevent-first-zero numeric-validation" aria-errormessage="Phone Number" data-country-code="1">
                                                <span class="phone-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" id="password" placeholder="Please Enter Your Password" class="form-control rounded-0">
                                    </div>
                                    <div class="form-group text-md-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" data-toggle="submit" class="custom-control-input" id="agreeBusinessListingTerms" name="agreeBusinessListingTerms" checked required>
                                            <label class="custom-control-label text-muted text-15" for="agreeBusinessListingTerms">I Agree to <a href="#" data-toggle="smoth-anchor" data-target="#termAgreement" class="text-muted text-hover-underline">Business & Product Listing Terms</a></label>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-5 text-center">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Join Free Now</button>
                                        </div>
                                        <div class="pt-2 form-group">
                                            Already a Member?
                                            <a href="{{ url('login') }}" class="text-link"> Click Here to Login</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-lg-5">
                <div class="terms-text-box" id="termAgreement">
                <h3 class="text-strong text-muted">DOB Business &amp; Product Listing Terms</h3>
                <p>DOB requests you to read its "Business &amp; Product Listing Terms" carefully before accessing, using or listing your business / product / trade leads / buy requirement to our online business directory and DOB business website. By accessing or using any listing form of the site, you agree to be bound by these business listing terms. If you do not agree to our business listing terms, then you should not use any of our free or paid listing services.</p>
                <p>Any new features or tools are also subject to the business listing terms. We reserve the right to update, change or replace any part of these terms by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes.</p>
                <div class="mb-2 text-20 text-strong">Business &amp; Product Listing - Service Overview.</div>
                <p>DOB is a comprehensive DOB platform that aims to bridge the gap between buyers and sellers, importers and exporters, suppliers, traders, and wholesalers. We provide the best product and service advertising and communication tools for companies, allowing them to take advantage of online business listing and advertising. Our listing services include a wide range of features such as product listing, directory and portal listing, marketplace listing, product catalogues, company profiles with contact information, promotional documents, pictures, videos etc.</p>
                <p>At DOB, we offer free business listing opportunities on our online business directory and DOB marketplace. We welcome all types of businesses, including suppliers, manufacturers, and exporters, to list their businesses and gain more online visibility. By creating a free business profile with product showcase, you can promote your business and unlock its full DOB potential online.</p>
                <p>DOB product manufacturers, exporters, wholesalers, and suppliers can easily list their companies on the DOB business and product listing site. By registering with our online directory and portal, manufacturers, wholesalers, and suppliers can create free business profiles and showcase their products to a worldwide audience. Any authentic business can register for free and create a DOB business profile, allowing them to connect with global buyers and explore new business opportunities. List your products on DOB and tap into a vast network of potential buyers.</p>
                <p>For buyers, DOB serves as a wholesale product sourcing site, enabling seamless connections and communication with both local and global suppliers, manufacturers and exporters. Our user-friendly platform facilitates effective communication and collaboration between businesses, helping importers and buyers to compare product and price, secure supply chains, expand sourcing channels and secure supply chains.</p>
                <p>Product manufacturers, suppliers, and exporters can easily register to join our DOB trade and business platform. By listing your business and products, you can find new buyers, establish direct communication channels, boost online visibility and receive inquiries from targeted buyers. Our user-friendly yet powerful cost-saving DOB tools help marketers save on marketing and operational costs while maximizing their sales potential. Use DOB's online business directory and DOB marketplace to reach wider audience and gain more business and . It is a reliable and leading business listing site that facilitates connections between buyer-supplier or importer-exporter. Maximize your business exposure by join free to our DOB platform. List your business on DOB to connect with buyers from around the world, including SMEs. Take your business to the global stage.</p>
                <p>In addition to free services, DOB also offers a paid membership option known as "Premium Membership." Qualified businesses can subscribe to Premium Membership and gain access to exclusive business and product promotion services, including higher visibility. Our Premium Membership plans provide comprehensive DOB sales and marketing solutions, enhancing business branding, product exposure, and improving the sales pipeline. With advanced DOB tools, suppliers can find the best business partners and seize new opportunities worldwide. Paid members enjoy higher search and business directory rankings, making it easier for potential buyers or business partners to find them. Our DOB promotion tools simplify the process of creating, updating, and promoting businesses and products online.</p>
                <p>DOB accepts all types of legal products under main categories such as agro &amp; agriculture, apparel &amp; fashion, arts, crafts &amp; gifts, automotive &amp; automobile, business services, chemicals, computer &amp; IT, construction &amp; real estate, electronics &amp; electrical, energy &amp; power, food &amp; beverage, furniture &amp; decor, health &amp; medical, home appliances, lights &amp; lighting, machinery &amp; industrial supplies, minerals &amp; raw materials, office supplies, paper, printing &amp; packaging, rubber &amp; plastic products, security &amp; protection, sports &amp; entertainment, textiles, leather &amp; jute, tools &amp; hardware, and more.</p>
                <div class="mb-2 text-20 text-strong">Business &amp; Product Listing Terms</div>
                <p>You may not post, sell or buy any item that is restricted or prohibited by a federal, state or local law in any country or jurisdiction.</p>
                <p>Please be aware that DOB does not permit any trading items that are illegal, infringe upon the intellectual property rights of others, or may easily be used for illegal purposes.</p>
                <p>As a member of DOB, you are responsible for ensuring that all the listing information and items you have posted are legal or permissible. Thus, before posting any product, selling offer or buying lead, you need to make sure that your trading items are NOT against the 'Business &amp; Product Listing Terms'.</p>
                <p>DOB reserves the right to remove any trading items that violate the 'Business &amp; Product Listing Terms' without further notice. DOB also reserves the right to disable or terminate the accounts of any members who violate the 'Business &amp; Product Listing Terms' without any prior notice.</p>
                <h6 class="pt-3 mb-3 text-strong">The following product types are prohibited on DOB.com:</h6>
                <ol class="mb-4">
                <li class="pl-2 mb-2">Any prescription drugs, unapproved or Illegal drugs, Steroids, supplements, Diet pills, substance.</li>
                <li class="pl-2 mb-2">Intellectual Property Rights (IPR) Infringing Products including Replica or Counterfeit Items.</li>
                <li class="pl-2 mb-2">Any banned product or transactions including trade disputes</li>
                <li class="pl-2 mb-2">precious metals including Gold, Gold dust, gold bullion, silver, diamonds</li>
                <li class="pl-2 mb-2">Any kind of Tobacco Products including cigars, cigarettes, E-cigarettes, e-liquid</li>
                <li class="pl-2 mb-2">Any kind of Government documents including currency, stamps, coins, notes, Government IDs and licences</li>
                <li class="pl-2 mb-2">Cash or cash equivalent instruments and Financial services including money transfers, issuing bank guarantees and letters of credit, loans, donations, fundraising and funding for personal investment purposes</li>
                <li class="pl-2 mb-2">Pornographic, erotic &amp; adult contents including pictures, videos, DVDs, magazines, sextoys</li>
                <li class="pl-2 mb-2">Arms, Explosives, and Hazardous Materials including Firearms, ammunition, stun guns, air guns, military weapons</li>
                <li class="pl-2 mb-2">Any kind of Wildlife and related animal products including pelts, skins, internal organs, teeth, claws, shells, bones, tusks, ivory and other parts</li>
                <li class="pl-2 mb-2">Software and Messaging products include Unauthorized, OEM or bundled copies of software, Spyware, Spamware, e-mail advertising, opt-in, or any commercial messaging.</li>
                <li class="pl-2 mb-2">
                <strong class="mb-2 d-block">Others</strong>
                <ul class="pl-3" style="list-style: disc">
                <li class="pl-1 mb-2">Alcohol and Alcoholic beverages</li>
                <li class="pl-1 mb-2">Cannabis, CBD &amp; drug paraphernalia</li>
                <li class="pl-1 mb-2">Human body parts, fluids and remains</li>
                <li class="pl-1 mb-2">Lottery, tickets, raffle, contests related</li>
                <li class="pl-1 mb-2">Illegal herbal products</li>
                <li class="pl-1 mb-2">Unlicensed pesticides</li>
                <li class="pl-1 mb-2">Hatred, racism or religious persecution products</li>
                </ul>
                </li>
                </ol>
                <p><span class="text-strong text-danger">NOTE</span> : If you deal with any Illegal product / chemicals or Drugs, any types of products that are prohibited on DOB; any banned product or transactions, trade disputes, your account will be limited or terminated. In this regard, even if you are a premium member of this DOB platform, unfortunately, we cannot give you any refund. We hope you remember.</p>
                <p class="text-strong">This document provides a highlight on business registration, product listing, posting buy requirement and various information listing issues using our web forms. Please be sure to check our <a href="https://b2bmap.com/terms" target="_blank" class="text-primary">Terms of Use</a> and <a href="https://b2bmap.com/privacy-policy" target="_blank" class="text-primary">Privacy Policy</a> for detail understanding about the terms. We sincerely hope that you will collaborate with us to make this business-to-business platform fair and safe.</p>
                </div>
                </div>
        </div>
    </div>
</section>
        
<script>
    document.getElementById('country_id').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var phonecode = selectedOption.getAttribute('data-phonecode');
        document.getElementById('phonecode').value = phonecode;
    });
</script>
   
@endsection

