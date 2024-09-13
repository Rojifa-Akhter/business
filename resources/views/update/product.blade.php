@extends('update.index')
@section('product')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

<main class="main-body">
    <div class="container custom-container">
        <div class="d-lg-flex">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="px-3 pb-2 mb-2 d-flex align-items-center border-bottom">
                            <div class="mr-2">
                                <div class="pb-2 box-40">
                                    <img src="https://b2bmap.com/public/uploads/companylogo/2024/it-1721105420.jpg" alt="User Image">
                                </div>
                            </div>
                            <h6 class="mb-0 text-center name text-strong counter-color-primary">User</h6>
                        </div>
                        <ul class="list-unstyled user-aside-menu-list d-flex flex-column">
                            <li class="px-3 mb-3 text-center user-aside-menu-item active current-page">
                                <a href="{{ url('update-profile') }}" class="dashboard btn btn-lg-4 btn-primary">
                                    <span class="mr-2"><i class="bi bi-speedometer2"></i></span> Dashboard
                                </a>
                            </li>
                            <li class="user-aside-menu-item">
                                <a href="{{ url('communication') }}" class="user-aside-menu-link">
                                    <span class="me-2"><i class="bi bi-envelope"></i></span> Inbox
                                </a>
                            </li>
                            <li class="user-aside-menu-item">
                                <a href="{{ url ('product') }}" class="user-aside-menu-link">
                                    <span class="mr-2"><i class="bi bi-box"></i></span> My Product
                                </a>
                            </li>
                            <li class="user-aside-menu-item">
                                <a href="{{ url('buy-offer') }}" class="user-aside-menu-link">
                                    <span class="mr-2"><i class="bi bi-pin-angle"></i></span> Post Buy Requirement
                                </a>
                            </li>
                            <li class="user-aside-menu-item active">
                                <a href="{{ url('update-profile') }}" class="user-aside-menu-link">
                                    <span class="mr-2"><i class="bi bi-laptop"></i></span> Business Profile
                                </a>
                            </li>
                            <li class="user-aside-menu-item">
                                <a href="{{ url('alert') }}" class="user-aside-menu-link">
                                    <span class="mr-2"><i class="bi bi-bell-fill"></i></span> DOB Leads / Alerts
                                </a>
                            </li>
                            <li class="user-aside-menu-item">
                                <a href="{{ url('support-center') }}" class="user-aside-menu-link">
                                    <span class="mr-2"><i class="fa fa-spinner fa-spin text-theme"></i></span> Help Center
                                </a>
                            </li>
                            <li class="user-aside-menu-item">
                                <a href="{{ url('pricing') }}" class="user-aside-menu-link">
                                    <span class="mr-2"><i class="bi bi-trophy-fill"></i></span> Premium Service
                                </a>
                            </li>
                            <li class="user-aside-menu-item">
                                <a href="{{ url('setting') }}" class="user-aside-menu-link">
                                    <span class="mr-2"><i class="bi bi-gear"></i></span> Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9" style="margin-left: 10px;">
                <div class="mb-4 card">
                    <div class="card-body">
                        <h4 id="productInfoLabel" class="py-3 mb-4 text-center">You haven't posted any product yet</h4>
                        <div class="form-container">
                            <div class="mb-4 d-flex justify-content-center">
                                <button id="toggleProductInfoButton" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#productInfoCollapse" aria-expanded="true" aria-controls="productInfoCollapse">
                                    <i class="bi bi-plus-lg"></i> Add New Product
                                </button>
                            </div>
                            <div id="productInfoCollapse" class="accordion-collapse collapse" aria-labelledby="productInfoHeading" data-bs-parent="#accordionproductInfo">
                                <div class="form-body" style="margin-left: 10%; margin-right: 10%;">
                                    <div class="mb-3 border-bottom mb-lg-4">
                                        <h3 class="text-primary">Add New Product</h3>
                                        <p class="text-muted">Please provide detailed information about your product. It helps you reach potential buyers easily.</p>
                                    </div>
                                    <form>
                                        <div class="mb-3 form-group row mb-lg-4">
                                            <label class="col-lg-4 text-secondary" for="name">Product Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" name="name" id="name" placeholder="Enter Product Name" class="form-control char-count check-product-url">
                                                <span class="px-1 slug-info"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row mb-lg-4">
                                            <label class="col-lg-4 text-secondary" for="cat_id">Product Category <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <select name="cat_id" id="cat_id" class="form-control">
                                                    <option value="">-- Select Product Category --</option>
                                                    <option value="7">Agro & Agriculture</option>
                                                    <option value="8">Apparel & Fashion</option>
                                                    <option value="9">Arts, Crafts & Gifts</option>
                                                    <option value="10">Automotive & Automobile</option>
                                                    <option value="12">Chemicals</option>
                                                    <option value="13">Computer & IT</option>
                                                    <option value="14">Construction & Real Estate</option>
                                                    <option value="5">Electronics & Electrical</option>
                                                    <option value="15">Energy & Power</option>
                                                    <option value="6">Food & Beverage</option>
                                                    <option value="16">Furniture & Decor</option>
                                                    <option value="17">Health & Medical</option>
                                                    <option value="18">Home Appliances</option>
                                                    <option value="22">Lights & Lighting</option>
                                                    <option value="19">Machinery & Industrial Supplies</option>
                                                    <option value="21">Minerals & Raw Materials</option>
                                                    <option value="20">Office Supplies</option>
                                                    <option value="23">Paper, Printing & Packaging</option>
                                                    <option value="24">Rubber & Plastic Products</option>
                                                    <option value="25">Security & Protection</option>
                                                    <option value="26">Sports & Entertainment</option>
                                                    <option value="27">Textiles Leather & Jute</option>
                                                    <option value="28">Tools & Hardware</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row mb-lg-4">
                                            <label class="col-lg-4 text-secondary" for="sub_cat_id">Product Sub Category <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <select name="sub_cat_id" id="sub_cat_id" class="form-control">
                                                    <option value="">-- Select Sub-category --</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row mb-lg-4">
                                            <label class="col-lg-4 text-secondary" for="details">Product Details <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea name="details" id="details" rows="5" placeholder="Enter Product Details" class="form-control summernote"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row mb-lg-4">
                                            <label class="col-lg-4 text-secondary" for="product_usage">Product Usage <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea rows="3" name="product_usage" id="product_usage" placeholder="Enter Product Usage / Application " class="form-control form-control-sm auto-resize" style="height: 71px;"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row mb-lg-4">
                                            <label class="col-lg-4 text-secondary" for="product_keywords">Product Keywords <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea rows="3" name="product_keywords" id="product_keywords" placeholder="Enter Product Search Keywords" class="form-control form-control-sm auto-resize" style="height: 71px;"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row mb-lg-4">
                                            <label class="col-lg-4 text-secondary" for="product_code">Product Code / Hs Code </label>
                                            <div class="col-lg-8">
                                                <input type="text" name="product_code" id="product_code" value="" placeholder="Enter Product Code / Hs Code" class="form-control char-count">
                                            </div>
                                        </div>
                                        <div class="mb-4 mb-lg-5">
                                            <div class="mb-4">
                                                <h3 class="text-primary">Product Information</h3>
                                            </div>
                                            <div class="mb-3 form-group row mb-lg-4">
                                                <label class="col-lg-4 text-secondary" for="brand">Brand Name</label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="brand" id="brand" value="" placeholder="Enter product brand name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mb-3 form-group row mb-lg-4">
                                                <label class="col-lg-4 text-secondary" for="country_of_origin">Country of Origin <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <select name="country_of_origin" id="country_of_origin" class="form-control">
                                                    <option value=""> -- Country of Origin -- </option>
                                                    <option value="18"> Afghanistan</option>
                                                    <option value="2"> Albania</option>
                                                    <option value="3"> Algeria</option>
                                                    <option value="4"> American Samoa</option>
                                                    <option value="5"> Andorra</option>
                                                    <option value="6"> Angola</option>
                                                    <option value="7"> Anguilla</option>
                                                    <option value="8"> Antarctica</option>
                                                    <option value="10"> Argentina</option>
                                                    <option value="11"> Armenia</option>
                                                    <option value="12"> Aruba</option>
                                                    <option value="13"> Australia</option>
                                                    <option value="14"> Austria</option>
                                                    <option value="15"> Azerbaijan</option>
                                                    <option value="16"> Bahamas The</option>
                                                    <option value="17"> Bahrain</option>
                                                    <option value="1"> Bangladesh</option>
                                                    <option value="19"> Barbados</option>
                                                    <option value="20"> Belarus</option>
                                                    <option value="21"> Belgium</option>
                                                    <option value="23"> Benin</option>
                                                    <option value="25"> Bhutan</option>
                                                    <option value="26"> Bolivia</option>
                                                    <option value="28"> Botswana</option>
                                                    <option value="30"> Brazil</option>
                                                    <option value="31"> British Indian Ocean Territory</option>
                                                    <option value="32"> Brunei</option>
                                                    <option value="33"> Bulgaria</option>
                                                    <option value="34"> Burkina Faso</option>
                                                    <option value="36"> Cambodia</option>
                                                    <option value="37"> Cameroon</option>
                                                    <option value="38"> Canada</option>
                                                    <option value="42"> Chad</option>
                                                    <option value="43"> Chile</option>
                                                    <option value="44"> China</option>
                                                    <option value="45"> Christmas Island</option>
                                                    <option value="47"> Colombia</option>
                                                    <option value="49"> Congo</option>
                                                    <option value="52"> Costa Rica</option>
                                                    <option value="55"> Cuba</option>
                                                    <option value="56"> Cyprus</option>
                                                    <option value="57"> Czech Republic</option>
                                                    <option value="58"> Denmark</option>
                                                    <option value="61"> Dominican Republic</option>
                                                    <option value="64"> Egypt</option>
                                                    <option value="68"> Estonia</option>
                                                    <option value="69"> Ethiopia</option>
                                                    <option value="73"> Fiji Islands</option>
                                                    <option value="74"> Finland</option>
                                                    <option value="75"> France</option>
                                                    <option value="78"> French Southern Territories</option>
                                                    <option value="79"> Gabon</option>
                                                    <option value="81"> Georgia</option>
                                                    <option value="82"> Germany</option>
                                                    <option value="83"> Ghana</option>
                                                    <option value="84"> Gibraltar</option>
                                                    <option value="85"> Greece</option>
                                                    <option value="86"> Greenland</option>
                                                    <option value="92"> Guinea</option>
                                                    <option value="93"> Guinea-Bissau</option>
                                                    <option value="98"> Hong Kong S.A.R.</option>
                                                    <option value="99"> Hungary</option>
                                                    <option value="101"> India</option>
                                                    <option value="102"> Indonesia</option>
                                                    <option value="103"> Iran</option>
                                                    <option value="104"> Iraq</option>
                                                    <option value="105"> Ireland</option>
                                                    <option value="106"> Israel</option>
                                                    <option value="107"> Italy</option>
                                                    <option value="108"> Jamaica</option>
                                                    <option value="109"> Japan</option>
                                                    <option value="111"> Jordan</option>
                                                    <option value="112"> Kazakhstan</option>
                                                    <option value="113"> Kenya</option>
                                                    <option value="116"> Korea South</option>
                                                    <option value="117"> Kuwait</option>
                                                    <option value="118"> Kyrgyzstan</option>
                                                    <option value="120"> Latvia</option>
                                                    <option value="121"> Lebanon</option>
                                                    <option value="123"> Liberia</option>
                                                    <option value="124"> Libya</option>
                                                    <option value="126"> Lithuania</option>
                                                    <option value="127"> Luxembourg</option>
                                                    <option value="130"> Madagascar</option>
                                                    <option value="132"> Malaysia</option>
                                                    <option value="133"> Maldives</option>
                                                    <option value="134"> Mali</option>
                                                    <option value="135"> Malta</option>
                                                    <option value="137"> Marshall Islands</option>
                                                    <option value="140"> Mauritius</option>
                                                    <option value="142"> Mexico</option>
                                                    <option value="148"> Morocco</option>
                                                    <option value="150"> Myanmar</option>
                                                    <option value="151"> Namibia</option>
                                                    <option value="153"> Nepal</option>
                                                    <option value="155"> Netherlands</option>
                                                    <option value="157"> New Zealand</option>
                                                    <option value="159"> Niger</option>
                                                    <option value="160"> Nigeria</option>
                                                    <option value="164"> Norway</option>
                                                    <option value="165"> Oman</option>
                                                    <option value="247"> Others</option>
                                                    <option value="166"> Pakistan</option>
                                                    <option value="170"> Papua new Guinea</option>
                                                    <option value="172"> Peru</option>
                                                    <option value="173"> Philippines</option>
                                                    <option value="175"> Poland</option>
                                                    <option value="176"> Portugal</option>
                                                    <option value="177"> Puerto Rico</option>
                                                    <option value="178"> Qatar</option>
                                                    <option value="179"> Reunion</option>
                                                    <option value="180"> Romania</option>
                                                    <option value="181"> Russia</option>
                                                    <option value="182"> Rwanda</option>
                                                    <option value="184"> Saint Kitts And Nevis</option>
                                                    <option value="185"> Saint Lucia</option>
                                                    <option value="191"> Saudi Arabia</option>
                                                    <option value="192"> Senegal</option>
                                                    <option value="193"> Serbia</option>
                                                    <option value="195"> Sierra Leone</option>
                                                    <option value="196"> Singapore</option>
                                                    <option value="197"> Slovakia</option>
                                                    <option value="198"> Slovenia</option>
                                                    <option value="201"> Somalia</option>
                                                    <option value="202"> South Africa</option>
                                                    <option value="204"> South Sudan</option>
                                                    <option value="205"> Spain</option>
                                                    <option value="206"> Sri Lanka</option>
                                                    <option value="207"> Sudan</option>
                                                    <option value="210"> Swaziland</option>
                                                    <option value="211"> Sweden</option>
                                                    <option value="212"> Switzerland</option>
                                                    <option value="213"> Syria</option>
                                                    <option value="214"> Taiwan</option>
                                                    <option value="216"> Tanzania</option>
                                                    <option value="217"> Thailand</option>
                                                    <option value="218"> Togo</option>
                                                    <option value="221"> Trinidad And Tobago</option>
                                                    <option value="222"> Tunisia</option>
                                                    <option value="223"> Turkey</option>
                                                    <option value="224"> Turkmenistan</option>
                                                    <option value="227"> Uganda</option>
                                                    <option value="228"> Ukraine</option>
                                                    <option value="229"> United Arab Emirates</option>
                                                    <option value="230"> United Kingdom</option>
                                                    <option value="231"> United States</option>
                                                    <option value="233"> Uruguay</option>
                                                    <option value="234"> Uzbekistan</option>
                                                    <option value="235"> Vanuatu</option>
                                                    <option value="237"> Venezuela</option>
                                                    <option value="248"> Vietnam</option>
                                                    <option value="243"> Yemen</option>
                                                    <option value="245"> Zambia</option>
                                                    <option value="246"> Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 form-group row mb-lg-4">
                                                <label class="col-lg-4 text-secondary" for="video">Product Video</label>
                                                <div class="col-lg-8 product-video-group">
                                                    <div class="m-n1 product-video-list">
                                                        <div class="p-1 product-video-item removable-item">
                                                            <div class="d-flex align-items-center">
                                                                <div class="pr-2 flex-grow-1">
                                                                    <input type="text" name="video[]" placeholder="Product Video (Youtube URL)" class="form-control">
                                                                </div>
                                                                <a href="#" class="btn btn-sm remove-item"><i class="fa fa-close"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pt-3 pb-2 text-center">
                                                        <a href="#" data-max="1" class="px-4 border btn btn-sm rounded-0 no-focus text-13 add-more-video"><i class="fa fa-plus"></i> Add More Video</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 form-group row mb-lg-4">
                                                <label class="col-lg-4 text-secondary" for="min_order_qty">Minimum Order Quantity <span class="text-danger">*</span></label>
                                                    <div class="col-lg-8">
                                                        <div class="row small-gutters">
                                                            <div class="col-6 col-lg-5">
                                                            <input type="text" name="min_order_qty" value="" id="min_order_qty" min="1" placeholder="Order Quantity" class="form-control numeric-validation" aria-errormessage="Quantity">
                                                            </div>
                                                            <div class="col-6 col-lg-7">
                                                                <select name="min_order_unit" id="min_order_quantity_unit" class="form-control minimum-order-qty-unit">
                                                                    <option value="">-- Select Unit --</option>
                                                                    <option value="Acre">Acre</option>
                                                                    <option value="Ampere">Ampere</option>
                                                                    <option value="Kilogram">Kilogram</option>
                                                                    <option value="Nos">Nos</option>
                                                                    <option value="Piece">Piece</option>
                                                                    <option value="Pieces">Pieces</option>
                                                                    <option value="Tons">Tons</option>
                                                                    <option value="Units">Units</option>
                                                                    <option value="Bag">Bag</option>
                                                                    <option value="Bags">Bags</option>
                                                                    <option value="Barrel">Barrel</option>
                                                                    <option value="Bottles">Bottles</option>
                                                                    <option value="Boxes">Boxes</option>
                                                                    <option value="Bushels">Bushels</option>
                                                                    <option value="Dozens">Dozens</option>
                                                                    <option value="Foot">Foot</option>
                                                                    <option value="Gallon">Gallon</option>
                                                                    <option value="Grams">Grams</option>
                                                                    <option value="Hectare">Hectare</option>
                                                                    <option value="Meter">Meter</option>
                                                                    <option value="Kilometer">Kilometer</option>
                                                                    <option value="Kilowatt">Kilowatt</option>
                                                                    <option value="Litre">Litre</option>
                                                                    <option value="Litres">Litres</option>
                                                                    <option value="Long Ton">Long Ton</option>
                                                                    <option value="Metric Ton">Metric Ton</option>
                                                                    <option value="Metric Tons">Metric Tons</option>
                                                                    <option value="Ounce">Ounce</option>
                                                                    <option value="Packets">Packets</option>
                                                                    <option value="Packs">Packs</option>
                                                                    <option value="Pair">Pair</option>
                                                                    <option value="Pound">Pound</option>
                                                                    <option value="Reams">Reams</option>
                                                                    <option value="Rolls">Rolls</option>
                                                                    <option value="Sets">Sets</option>
                                                                    <option value="Sheets">Sheets</option>
                                                                    <option value="Short Ton">Short Ton</option>
                                                                    <option value="Square Feet">Square Feet</option>
                                                                    <option value="Square Meters">Square Meters</option>
                                                                    <option value="Watt">Watt</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="mb-3 form-group row mb-lg-4">
                                                <label class="col-lg-4 text-secondary" for="price_info">Product Price (USD) <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <div class="row small-gutters align-items-center">
                                                        <div class="col-6 col-lg-5">
                                                            <input type="text" name="price_info" id="price_info" value="" min="1" placeholder="Price" class="form-control numeric-validation" data-allow-float="true" aria-errormessage="Price">
                                                        </div>
                                                    
                                                        <div class="col-6 col-lg-7">
                                                            <input type="hidden" name="unit_price" id="unit_price" class="price-unit" value="">
                                                            <div class="price-info-unit text-theme text-thin">
                                                                <span class="price-info-text">Price in USD</span>
                                                                <span class="price-unit-text"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 form-group row mb-lg-4">
                                                <label class="col-lg-4 text-secondary" for="payment_terms">Payment Terms</label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="payment_terms" id="payment_terms" value="" placeholder="Enter Payment Terms" class="form-control">
                                                </div>
                                            </div>
                                            <div class="mb-3 form-group row text-secondary">
                                                <label class="col-lg-4" for="sample_status">Sample Availability </label>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" name="sample_status" value="No" class="form-check-input sample_condition_info">No
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" name="sample_status" value="Yes" class="form-check-input sample_condition_info">Yes
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" name="sample_status" value="Yes ( On Condition )" class="form-check-input sample_condition_info">Yes <span class="text-13 text-muted">(On Condition)</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 row sampleConditionInfo" style="display: none">
                                                        <div class="mb-2 col-xl-12">
                                                            <textarea rows="3" name="sample_condition_info" id="sample_condition_info" class="form-control auto-resize" placeholder="Sample Condition Information" style="height: 0px;"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 form-group row text-secondary">
                                                <label class="col-lg-4" for="after_sell_service">Offer After Sell Service?</label>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" name="has_after_sell_service" value="no" class="form-check-input has_after_sell_service">No
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" name="has_after_sell_service" value="yes" class="form-check-input has_after_sell_service">Yes
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="after-sell-service-info" style="display: none">
                                                        <textarea rows="3" name="after_sell_service" id="after_sell_service" class="form-control auto-resize" placeholder="Sample Condition Information" style="height: 0px;"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 form-group row product-img">
                                                <label class="col-lg-4 text-secondary">Product Images <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <div class="custom-file-upload">
                                                        <input type="file" accept="image/.jpg, .jpg, .jpeg, .png, .gif, .webp, .svg" id="productImages" multiple>
                                                        <ul class="selected-file-list" data-min-required="2">
                                                            <li class="order-last pb-2 flex-grow-1">
                                                                <span class="file-lebel-text"><i class="bi bi-image text-24 text-muted" aria-hidden="true"></i> <br> Upload images</span>
                                                            </li>
                                                        </ul>
                                                        <div id="imagePreviewArea">
                                                            <!-- Preview images will appear here -->
                                                        </div>
                                                    </div>
                                                    <span class="text-error" id="imageError" style="display: none;">You have already selected images. You cannot select more.</span>
                                                </div>   
                                            </div>
                                            
                                         
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="px-4 btn btn-primary">Submit</button>
                                        </div>
                                        
                                    </form>
                                    <div class="text-end">
                                            <button type="button" class="btn btn-outline ms-2 text-primary" data-bs-toggle="collapse" data-bs-target="#productInfoCollapse" aria-expanded="false" aria-controls="productInfoCollapse">
                                                Skip Product Info
                                            </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade notice-modal" id="productVideoLimitModal" tabindex="-1" role="dialog" aria-labelledby="productVideoLimitModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="border-0 shadow modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close notice-modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-lg-5">
                    <div class="text-center notice-modal-fav">
                        <img src="https://b2bmap.com/public/images/fav.png" alt="Fav Icon">
                    </div>
                    <h4 class="mb-3 text-center text-theme">Showcase Unlimited Product Videos with Premium</h4>
                    <p class="text-center">Upgrade now to showcase unlimited videos for each product, grabbing buyer attention and driving higher engagement!</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <div class="d-flex my-n2 mx-n3">
                        <div class="px-3 py-2">
                            <a href="{{ url('pricing') }}" class="btn notice-modal-btn text-nowrap btn-primary"> Plans &amp; Pricing </a>
                        </div>
                        <div class="px-3 py-2">
                            <a href="{{ url('pricing') }}" class="btn notice-modal-btn btn-light-to-primary text-nowrap">Upgrade Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var toggleButton1 = document.getElementById('toggleProductInfoButton');
        var productInfoCollapse = document.getElementById('productInfoCollapse');
        var productInfoLabel = document.getElementById('productInfoLabel');
        productInfoCollapse.addEventListener('show.bs.collapse', function () {
            toggleButton1.style.display = 'none';
            productInfoLabel.style.display = 'none';
        });
        productInfoCollapse.addEventListener('hide.bs.collapse', function () {
            toggleButton1.style.display = 'block';
            productInfoLabel.style.display = 'block';
        });
       // Handle remove item
       // Handle remove item
       $(document).on('click', '.remove-item', function(e) {
                e.preventDefault();
                $(this).closest('.removable-item').remove();
            });

            // Handle add more video
            $('.add-more-video').click(function(e) {
                e.preventDefault();
                var maxVideos = $(this).data('max');
                var videoCount = $('.product-video-item').length;
                
                if (videoCount < maxVideos) {
                    var newVideoItem = `
                        <div class="p-1 product-video-item removable-item">
                            <div class="d-flex align-items-center">
                                <div class="pr-2 flex-grow-1">
                                    <input type="text" name="video[]" placeholder="Product Video (Youtube URL)" class="form-control">
                                </div>
                                <a href="#" class="btn btn-sm remove-item"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                    `;
                    $('.product-video-list').append(newVideoItem);
                } else {
                    $('#productVideoLimitModal').modal('show');
                }
        });
        ///image select
        var productImagesInput = document.getElementById('productImages');
        var imagePreviewArea = document.getElementById('imagePreviewArea');
        var fileList = document.querySelector('.selected-file-list');
        var imageError = document.getElementById('imageError');
        var imagesSelected = false; // Flag to track if images have been selected

        productImagesInput.addEventListener('change', function() {
            // Check if images have already been selected
            if (imagesSelected) {
                imageError.style.display = 'block'; // Show error message
                productImagesInput.value = ''; // Clear the file input
                return; // Exit the function
            }

            // Clear previous previews
            imagePreviewArea.innerHTML = '';
            fileList.innerHTML = ''; // Clear previous file list
            imageError.style.display = 'none'; // Hide error message

            // Get the selected files
            var files = productImagesInput.files;

            if (files.length > 0) {
                imagesSelected = true; // Set flag to true

                for (var i = 0; i < files.length; i++) {
                    var file = files[i];
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        // Create image element
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.classList.add('img-thumbnail', 'mr-2');
                        img.style.width = '100px';
                        img.style.height = '100px';

                        // Append to preview area
                        imagePreviewArea.appendChild(img);

                        // Update file list
                        var li = document.createElement('li');
                        li.classList.add('order-last', 'pb-2', 'flex-grow-1');
                        li.innerHTML = `<span class="file-lebel-text">
                                            <i class="bi bi-image text-24 text-muted" aria-hidden="true"></i>
                                            <br> ${file.name}
                                        </span>`;
                        fileList.appendChild(li);
                    };

                    reader.readAsDataURL(file); // Read the file as a data URL
                }
            }
        });
    });
</script>
<style>
    
</style>
@endsection
