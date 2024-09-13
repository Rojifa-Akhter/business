@extends('update.index')
@section('profile_update')
<style>
    /* Style for the border between columns */
    .border-right {
    border-right: 1px solid #ddd;
    }

    .card-body {
    width: 100%;
    }

    .form-group {
    margin-bottom: 1
    }  

</style>
<div class="row" style="margin-top: 24px">
    <!-- Sidebar -->
    <div class="col-lg-3">
        <div class="mb-4 card">
            <div class="text-center card-body d-flex flex-column align-items-center">
                <a href="#">
                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="p-1 rounded-circle bg-primary" width="110">
                </a>
                <div class="mt-3">
                    <label for="">Name</label>
                    <div class="mt-3">
                        <button class="btn btn-primary">Update Company Profile</button>  
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <ul class="list-unstyled user-aside-menu-list d-flex flex-column">
                    <li class="px-3 mb-3 text-center user-aside-menu-item active current-page">
                        <a href="#" class="btn btn-lg-4 btn-primary">
                            <span class="mr-2"><i class="bi bi-speedometer2"></i></span> Dashboard
                        </a>
                    </li>
                    <li class="user-aside-menu-item">
                        <a href="{{ url('communication') }}" class="user-aside-menu-link">
                            <span class="mr-2"><i class="bi bi-envelope"></i></span> Inbox
                        </a>
                    </li>
                    <li class="user-aside-menu-item">
                        <a href="{{ url('product') }}" class="user-aside-menu-link">
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
                        <ul class="list-unstyled user-aside-submenu-list">
                            <li class="user-aside-menu-item">
                                <a href="{{ url('brochure') }}" class="user-aside-submenu-link">
                                    <span class="mr-2"><i class="bi bi-chevron-compact-right"></i></span> Submit Brochure
                                </a>
                            </li>
                            <li class="user-aside-menu-item">
                                <a href="{{ url('certificate') }}" class="user-aside-submenu-link">
                                    <span class="mr-2"><i class="bi bi-chevron-compact-right"></i></span> Submit Certificate
                                </a>
                            </li>
                            <li class="user-aside-menu-item">
                                <a href="{{ url('video') }}" class="user-aside-submenu-link">
                                    <span class="mr-2"><i class="bi bi-chevron-compact-right"></i></span> Company/Products Videos
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="user-aside-menu-item">
                        <a href="#" class="user-aside-menu-link">
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

    <!-- Main Content -->
    <div class="col-lg-9">
        <div class="mb-4 card">
            <div class="card-body">
                <div class="mb-3 row">
                    <p class="mb-1 text-18 text-lg-22 text-theme">Welcome Mr. User!</p>
                </div>
                <div class="mb-3 row">
                    <h2 style="color: #1a73e8;">Please Update Your Business Profile</h2>
                </div>
            </div>
        </div>
        <div class="mb-4 card">
            <div class="card-body">
                <div class="row">
                    <label id="companyInfoLabel" class="col-lg-3 col-form-label">Company Info</label>
                    <div class="col-lg-9">
                        <button id="toggleCompanyInfoButton" class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#companyInfoCollapse" aria-expanded="true" aria-controls="companyInfoCollapse">
                            <i class="bi bi-plus-lg"></i>
                            Add Company Info
                        </button>
                        <div id="companyInfoCollapse" class="accordion-collapse collapse" aria-labelledby="companyInfoHeading"
                            data-bs-parent="#accordioncompanyInfo">
                            <div class="accordion-body">
                                <div class="mb-3 row">
                                    <h2>Company Information</h2>
                                </div>
                                <hr class="my-4">
                                <form> 
                                   <div class="mb-4 form-group row">
                                        <label class="col-lg-4" for="companyName">Company<span class="d-md-down-none"> Name</span></label>
                                        <div class="col-lg-8">
                                            <span>IT</span>
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group row">
                                        <label class="col-lg-4" for="countryAddress">Country<span class="d-md-down-none"> Name</span></label>
                                        <div class="col-lg-8">
                                            <span>Bangladesh</span>
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group row">
                                        <label class="col-lg-4" for="emailAddress">Email<span class="d-md-down-none"> Address</span></label>
                                        <div class="col-lg-8">
                                            <span class="text-break">mstrojifaakhter@gmail.com</span>
                                        </div>
                                    </div> 
                                
                                    <div class="mb-4 form-group row">
                                        <label class="col-lg-4 col-form-label mb-lg-0" for="year_established">Company Established<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="hidden" name="set_trade_info" id="set_trade_info" value="yes">
                                            <select name="year_established" id="year_established" class="form-control text-14">
                                                <option value="">-- Select Year --</option>
                                                @for($i = date('Y'); $i >= 2000; $i--)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group row">
                                        <label class="col-lg-4 col-form-label mb-lg-0" for="num_of_employee">Number of Employees<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <select name="num_of_employee" id="num_of_employee" class="form-control text-14">
                                                <option value=""> -- Number of Employee --</option>
                                                <option value="1-5">1-5</option>
                                                <option value="6-10">6-10</option>
                                                <option value="11-20">11-20</option>
                                                <option value="21-30">21-30</option>
                                                <option value="31-50">31-50</option>
                                                <option value="51-100">51-100</option>
                                                <option value="100+">100+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group row align-items-center">
                                        <label class="col-lg-4 mb-lg-0">Web Address (URL)<span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <input type="text" name="url" value="" class="form-control" placeholder="e.g: http://www.yourcompany.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 mb-lg-0">Business Identification Number</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="business_identification_number" value="" placeholder="Enter business identification number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-5 form-group row align-items-center">
                                        <label class="col-lg-4 mb-lg-0">Company Logo<span class="text-danger">*</span></label>
                                        <div class=" col-8">
                                            <form method="POST" action="https://b2bmap.com/myzone/upload-company-logo" enctype="multipart/form-data" id="uploadCompanyLogo">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="mx-auto box-ratio box-ratio-4by3 w-150px position-relative">
                                                    <div class="text-center attach-file-with-preview position-relative" style="width: 150px; height: 112px;">
                                                        <img src="https://b2bmap.com/public/images/no-logo.png" id="logoPreview" class="mb-3 border rounded img-fluid" style="width: 100%; height: 100%; object-fit: cover;" alt="Logo Preview">
                                                        <label for="changeProfileLogo" class="mb-0 btn btn-primary btn-block">Choose Logo</label>
                                                        <input type="file" name="logo" accept="image/*" onchange="previewFile(this)" id="changeProfileLogo" class="d-none">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>         
                                    </div>

                                    <div class="text-end">
                                        <button type="button" class="btn btn-outline ms-2 text-primary" data-bs-toggle="collapse"
                                            data-bs-target="#companyInfoCollapse" aria-expanded="false" aria-controls="companyInfoCollapse">
                                            Skip Company Info
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4 card">
            <div class="card-body">
                <div class="row">
                    <label id="businessInfoLabel" class="col-lg-3 col-form-label">Business Information</label>
                    <div class="col-lg-9">
                        <button id="toggleBusinessInfoButton" class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#businessInfoCollapse" aria-expanded="true" aria-controls="businessInfoCollapse">
                            <i class="bi bi-plus-lg"></i>
                            Business Information
                        </button>
                        <div id="businessInfoCollapse" class="accordion-collapse collapse" aria-labelledby="businessInfoHeading"
                            data-bs-parent="#accordionbusinessInfo">
                            <div class="accordion-body">
                                <div class="mb-3 row">
                                    <h2>About Your Business</h2>
                                </div>
                                <hr class="my-4">
                                <div class="mb-4 form-group row">
                                    <label class="col-lg-4 mb-lg-0">Business Type<span class="text-danger">*</span></label>
                                    <div class="col-lg-4">
                                        <div class="business-type" id="businessTypeForBuyer">
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="business_type[]" value="7" class="form-check-input"> Importer
                                                </label>
                                            </div>
                                        </div>
                                        <div class="business-type" id="businessTypeForSeller" style="display: block">
                                            <div class="mb-2 form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="business_type[]" value="5" class="form-check-input business-type-length"> Manufacturer
                                                </label>
                                            </div>
                                            <div class="mb-2 form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="business_type[]" value="8" class="form-check-input business-type-length"> Supplier
                                                </label>
                                            </div>
                                            <div class="mb-2 form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="business_type[]" value="6" class="form-check-input business-type-length"> Wholesaler
                                                </label>
                                            </div>
                                            <div class="mb-2 form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="business_type[]" value="1" class="form-check-input business-type-length"> Exporter
                                                </label>
                                            </div>
                                            <div class="mb-2 form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="business_type[]" value="3" class="form-check-input business-type-length"> Trading Company
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-4 form-group row">
                                    <label class="col-lg-4 mb-lg-0">Business Category<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <select name="cat_id" id="cat_id" class="form-control text-14 get-subcategory valid" aria-invalid="false">
                                            <option value=""> -- Select Category --</option>
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
                        
                                <div class="mb-4 form-group row">
                                    <label class="col-lg-4 mb-lg-0">Subcategory<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <select name="subcategory_id" id="subcategory_id" class="form-control text-14">
                                            <option value=""> -- Select Subcategory --</option>
                                        </select>
                                    </div>
                                </div>
                        
                                <div class="mb-4 form-group row">
                                    <label class="col-lg-4 mb-lg-0">About Company<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <textarea name="about_company" id="about_company" class="form-control summernote" placeholder="Please provide details about your company ..."></textarea>
                                    </div>
                                </div>
                        
                                <div class="mb-4 form-group row">
                                    <label class="col-lg-4" for="main_product">Main Products<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input name="main_product" value="" id="main_product" class="form-control" placeholder="Main Products">
                                    </div>
                                </div>
                        
                                <div class="mb-4 row">
                                    <label class="col-lg-4" for="Address">Address</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" value="Bay Area, San Francisco, CA">
                                    </div>
                                </div>
                        
                                <div class="mb-4 form-group row">
                                    <label class="col-lg-4">Do you offer after-sale services &amp; support?</label>
                                    <div class="col-lg-8">
                                        <div class="service-support-box">
                                            <div class="mb-2 d-flex">
                                                <div class="mr-3">
                                                    <label class="form-check-label" for="service_support_yes">
                                                        <input type="radio" name="service_support" id="service_support_yes" value="1" class="service-support"> Yes
                                                    </label>
                                                </div>
                                                <div class="mr-3 form-check">
                                                    <label class="form-check-label" for="service_support_no">
                                                        <input type="radio" name="service_support" id="service_support_no" value="0" class="service-support"> No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-2" id="serviceSupportOption" style="display: none">
                                                <textarea class="form-control auto-resize" name="after_sales_service" rows="3" placeholder="About After Sale Service" style="height: 0px;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="form-group row">
                                    <label class="col-lg-4">Do you have a Quality Control Policy?</label>
                                    <div class="col-md-8">
                                        <div class="service-support-box">
                                            <div class="mb-2 d-flex">
                                                <div class="mr-3">
                                                    <label class="form-check-label" for="quality_control_yes">
                                                        <input type="radio" class="quality-control" value="1" name="quality_control" id="quality_control_yes"> Yes
                                                    </label>
                                                </div>
                                                <div class="mr-3 form-check">
                                                    <label class="form-check-label" for="quality_control_no">
                                                        <input type="radio" class="quality-control" value="0" name="quality_control" id="quality_control_no"> No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="mt-2" id="qualityControlOption" style="display: none">
                                                <textarea class="form-control auto-resize" rows="3" name="quality_control_policy" placeholder="Quality Control Policy" style="height: 0px;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="button" class="btn btn-outline ms-2 text-primary" data-bs-toggle="collapse"
                                        data-bs-target="#businessInfoCollapse" aria-expanded="false" aria-controls="businessInfoCollapse">
                                        Skip Business Info
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4 card">
            <div class="card-body">
                <div class="row">
                    <label class="col-lg-3 col-form-label">Company Photos:</label>
                    <div class="col-lg-9">
                        <div class="col-sm-9 text-secondary">
                            <button type="button" class="border btn bg-theme-light ekadhik-group-trigger">
                                <i class="mr-2 fas fa-file-image text-20 text-business-secondary" aria-hidden="true"></i> Upload Company Images
                            </button>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
        <div class="mb-4 card">
            <div class="card-body">
                <div class="row">
                    <label id="factoryInfoLabel" class="col-lg-3 col-form-label">Factory Info</label>
                    <div class="col-lg-9">
                        <button id="toggleFactoryInfoButton" class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#factoryInfoCollapse" aria-expanded="true" aria-controls="factoryInfoCollapse">
                            <i class="bi bi-plus-lg"></i>
                            Add Factory Info
                        </button>
                        <div id="factoryInfoCollapse" class="accordion-collapse collapse" aria-labelledby="factoryInfoHeading"
                            data-bs-parent="#accordionFactoryInfo">
                            <div class="accordion-body">
                                <div class="mb-3 row">
                                    <h2>Factory Info</h2>
                                </div>
                                <hr class="my-4">
                                <form>
                                    <div class="mb-4 form-group row">
                                        <label class="col-lg-3" for="factoryName">Factory Name<span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="factoryName" placeholder="Enter factory name">
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group row">
                                        <label class="col-lg-3" for="factoryAddress">Factory Address<span class="text-danger">*</span></label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="factoryAddress" placeholder="Enter factory address">
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group row">
                                        <label class="col-lg-3 mb-lg-0">Contact Person</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="contactPersonName" placeholder="Enter contact person name">
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group row">
                                        <label class="col-lg-3 mb-lg-0">Contact Number</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="contactPersonPhone" placeholder="Enter contact person phone number">
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group row">
                                        <label class="col-lg-3 mb-lg-0">Factory Details</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control" id="factoryDetails" rows="3" placeholder="Enter factory details with production capacity & facilities"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-4 form-group row">
                                        <label class="col-lg-3 mb-lg-0">Factory Images</label>
                                        <div class="col-lg-9">
                                            <div class="custom-file-upload">
                                                <input type="file" class="form-control" id="factoryImages" multiple>
                                                <ul class="selected-file-list">
                                                    <li class="upload-prompt">
                                                        <span class="label-text">
                                                            <i class="fas fa-file-image text-24 text-muted" aria-hidden="true"></i>
                                                            <br>
                                                            Upload images
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <button type="button" class="btn btn-outline ms-2 text-primary" data-bs-toggle="collapse"
                                            data-bs-target="#factoryInfoCollapse" aria-expanded="false" aria-controls="factoryInfoCollapse">
                                            Skip Factory Info
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4 card">
            <div class="card-body">
                <div class="mb-3 row">
                    <h2>Company Information</h2>
                </div>
                <hr class="my-4">
        
                <div class="mb-4 form-group row">
                    <label class="col-lg-3 col-form-label">Company Address<span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" id="companyAddress" placeholder="Enter company address">
                    </div>
                </div>
        
                <div class="mb-4 row">
                    <div class="col-lg-6">
                        <div class="form-group row align-items-center">
                            <label class="col-lg-6 col-form-label">Zip / Postal Code <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" name="post_code" value="" class="form-control numeric-validation" aria-errormessage="Post Code" placeholder="Zip/Postal Code">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group row align-items-center">
                            <label class="col-lg-4 col-form-label">District</label>
                            <div class="col-lg-8">
                                <select name="district_id" id="district_id" class="form-control">
                                    <option value="55">Bagerhat</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4 card">
            <div class="card-body">
                <div class="row">
                    <!-- Contact Person Section -->
                    <div class="col-md-6 border-right">
                        <div class="pb-3 pr-xl-4 border-xl-down-bottom pb-xl-0">
                            <h5 class="mb-3">Contact Person</h5>
        
                            <div class="mb-4 form-group row align-items-center">
                                <label class="col-md-4 col-form-label">Name<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <div class=" d-flex align-items-center">
                                        <div class="mr-3" style="padding-right: 10px">
                                            <select name="title" class="form-control w-80px">
                                                <option value="Mr." selected>Mr</option>
                                                <option value="Ms.">Ms</option>
                                            </select>
                                        </div>
                                        <input type="text" name="name" value="user" class="form-control force-alphabet" data-allow-dot="true" placeholder="Full Name" aria-errormessage="Name">
                                    </div>
                                </div>
                            </div>
        
                            <div class="mb-4 form-group row align-items-center">
                                <label class="col-md-4 col-form-label" for="designation">Job Title<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="text" name="designation" value="" id="designation" class="form-control force-alphabet" placeholder="Enter Job Title / Designation">
                                </div>
                            </div>
        
                            <div class="mb-4 form-group row align-items-center">
                                <label class="col-md-4 col-form-label">Phone<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <div class="d-flex align-items-center">
                                        <div class="text-nowrap" style="padding-right: 10px">+880 1987328765</div>
                                        <a href="#" data-toggle="collapse" data-target="#directChangePhone" class="pl-2 text-business-tertiary text-13 text-nowrap">
                                            <span class="text-12"><i class="fa fa-edit"></i></span> Change
                                        </a>
                                    </div>
                                    <div class="collapse" id="directChangePhone">
                                        <div class="py-2 d-flex align-items-start">
                                            <div class="mr-2 border btn btn-sm rounded-0">+880</div>
                                            <div class="flex-grow-1">
                                                <input type="text" name="new_phone_number" min="0" value="" class="form-control form-control-sm val-new-phone-number prevent-first-zero numeric-validation" aria-errormessage="Phone Number" data-country-code="1" placeholder="Enter new number">
                                                <small class="new_phone_number phone-error"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
        
                    <!-- Company Owner Info Section -->
                    <div class="col-md-6">
                        <div class="pl-xl-4">
                            <h5 class="mb-3">Company Owner Info</h5>
        
                            <div class="mb-4 form-group row align-items-center">
                                <label class="col-md-4 col-form-label">Name<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <div class="d-flex align-items-center">
                                        <div class="mr-3" style="padding-right: 10px">
                                            <select name="owner_title" class="form-control mw-100px">
                                                <option value="Mr.">Mr</option>
                                                <option value="Ms.">Ms</option>
                                            </select>
                                        </div>
                                        <input type="text" name="owner_name" value="" class="form-control force-alphabet" data-allow-dot="true" placeholder="Full Name" aria-errormessage="Name">
                                    </div>
                                </div>
                            </div>
        
                            <div class="mb-4 form-group row align-items-center">
                                <label class="col-md-4 col-form-label d-lg-down-none">Email<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <input type="email" name="owner_email" value="" placeholder="Enter Email Address" class="form-control">
                                </div>
                            </div>
        
                            <div class="mb-4 form-group row align-items-center">
                                <label class="col-md-4 col-form-label d-lg-down-none">Phone<span class="text-danger">*</span></label>
                                <div class="col-md-8">
                                    <div class="d-flex align-items-center">
                                        <div class="mr-2 text-nowrap" style="padding-right: 10px">+880</div>
                                        <div class="w-100">
                                            <input type="text" name="owner_phone_number" id="owner_phone_number" value="" class="form-control prevent-first-zero numeric-validation" aria-errormessage="Phone Number" data-country-code="1" placeholder="Enter Phone Number">
                                            <span class="phone-error"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="px-5 btn btn-primary btn-md-down-small">Save &amp;
                Update
            </button>
        </div>
        
    </div>
</div>
        

      
        
<script>
document.addEventListener('DOMContentLoaded', function () {
    // factory
    var toggleButton = document.getElementById('toggleFactoryInfoButton');
    var factoryInfoCollapse = document.getElementById('factoryInfoCollapse');
    var factoryInfoLabel = document.getElementById('factoryInfoLabel');
    // Event listener for collapse show
    factoryInfoCollapse.addEventListener('show.bs.collapse', function () {
        toggleButton.style.display = 'none';
        factoryInfoLabel.style.display = 'none';
    });
        // Event listener for collapse hide
        factoryInfoCollapse.addEventListener('hide.bs.collapse', function () {
        toggleButton.style.display = 'block';
        factoryInfoLabel.style.display = 'block';
    });
    // company
    var toggleButton1 = document.getElementById('toggleCompanyInfoButton');
    var companyInfoCollapse = document.getElementById('companyInfoCollapse');
    var companyInfoLabel = document.getElementById('companyInfoLabel');
    // Event listener for collapse show
    companyInfoCollapse.addEventListener('show.bs.collapse', function () {
        toggleButton1.style.display = 'none';
        companyInfoLabel.style.display = 'none';
    });
    // Event listener for collapse hide
    companyInfoCollapse.addEventListener('hide.bs.collapse', function () {
        toggleButton1.style.display = 'block';
        companyInfoLabel.style.display = 'block';
    });
    // business
    var toggleButton2 = document.getElementById('toggleBusinessInfoButton');
    var businessInfoCollapse = document.getElementById('businessInfoCollapse');
    var businessInfoLabel = document.getElementById('businessInfoLabel');
    // Event listener for collapse show
    businessInfoCollapse.addEventListener('show.bs.collapse', function () {
        toggleButton2.style.display = 'none';
        businessInfoLabel.style.display = 'none';
    });
    // Event listener for collapse hide
    businessInfoCollapse.addEventListener('hide.bs.collapse', function () {
        toggleButton2.style.display = 'block';
        businessInfoLabel.style.display = 'block';
    });

    var fileInput = document.getElementById('factoryImages');
    var fileList = document.querySelector('.selected-file-list');

    fileInput.addEventListener('change', function () {
        fileList.innerHTML = '';
        Array.from(fileInput.files).forEach(function (file) {
            var listItem = document.createElement('li');
            listItem.className = 'file-item';
            listItem.innerHTML = `
                <span class="file-name">${file.name}</span>
                <button type="button" class="remove-file btn btn-sm btn-outline-danger">Remove</button>
            `;
            fileList.appendChild(listItem);
        });

        var uploadPrompt = document.createElement('li');
        uploadPrompt.className = 'upload-prompt';
        uploadPrompt.innerHTML = `
            <span class="label-text">
                <i class="fa fa-picture-o text-24 text-muted" aria-hidden="true"></i>
                <br>
                Upload more images
            </span>
        `;
        fileList.appendChild(uploadPrompt);
    });

    fileList.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-file')) {
            var listItem = e.target.closest('li');
            fileList.removeChild(listItem);
        }
    });
});

</script>


@endsection
