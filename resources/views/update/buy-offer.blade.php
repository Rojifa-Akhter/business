@extends('update.index')
@section('buy-offer')
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
                        <h4 id="requirementInfoLabel" class="py-3 mb-4 text-center">You haven't posted any buy requirement yet</h4>
                        <div class="form-container">
                            <div class="mb-4 d-flex justify-content-center">
                                <button id="toggleRequirementInfoButton" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#requirementInfoCollapse" aria-expanded="true" aria-controls="requirementInfoCollapse">
                                    <i class="bi bi-plus-lg"></i> Post Buy Requirement
                                </button>
                            </div>
                            <div id="requirementInfoCollapse" class="accordion-collapse collapse" aria-labelledby="requirementInfoHeading" data-bs-parent="#accordionrequirementInfo">
                                <div class="form-body" style="margin-left: 10%; margin-right: 10%;">
                                    <div class="mb-3 border-bottom mb-lg-4">
                                        <h3 class="text-primary">Post Buy Requirement</h3>
                                        <p class="text-muted">Enter details about your buying needs to get quotes from top suppliers.</p>
                                    </div>
                                    <form>
                                        <div class="mb-3 form-group row mb-lg-4">
                                            <label class="col-lg-4 text-secondary" for="name">requirement Name <span class="text-danger">*</span></label>
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
                                            <label class="col-lg-4 text-secondary" for="details">Requirement Details <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea name="details" id="details" rows="5" placeholder="Describe your buying requirement including specifications, sizes etc" class="form-control summernote"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row mb-lg-4">
                                            <label class="col-lg-4 text-secondary" for="qty">Quantity <span class="text-danger">*</span></label>
                                                <div class="col-lg-8">
                                                    <div class="row small-gutters">
                                                        <div class="col-6 col-lg-5">
                                                        <input type="text" name="qty" value="" id="qty" min="1" placeholder="Buy Quantity" class="form-control numeric-validation" aria-errormessage="Quantity">
                                                        </div>
                                                        <div class="col-6 col-lg-7">
                                                            <select name="buy_unit" id="buy_quantity_unit" class="form-control buy-qty-unit">
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
                                            <label class="col-lg-4 text-secondary">Packaging Terms</label>
                                            <div class="col-lg-8">
                                            <input type="text" name="packing_terms" value="" placeholder="Product Packaging Terms" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row mb-lg-4">
                                            <label class="col-lg-4 text-secondary">Shipping Terms</label>
                                            <div class="col-lg-8">
                                            <input type="text" name="shipping_terms" value="" placeholder="Shipping Terms" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-4 form-group row product-img">
                                            <label class="col-lg-4 text-secondary">Have Product Images?</label>
                                            <div class="col-lg-8">
                                                <div>
                                                    <label class="mr-2">
                                                        <input type="radio" name="image_type" value="1" data-has-img="true" class="image-type check-img"> Yes
                                                    </label>
                                                    <label class="mr-2">
                                                        <input type="radio" name="image_type" value="0" data-has-img="false" class="image-type check-img"> No
                                                    </label>
                                                </div>
                                                <div class="product-has-img" style="display: none;">
                                                    <div class="mb-4 form-group product-img">
                                                        <div class="custom-file-upload">
                                                            <input type="file" accept=".jpg, .jpeg, .png, .gif, .webp, .svg" class="file-input" id="buyRequirementImage" multiple data-name="images[]">
                                                            <ul class="selected-file-list">
                                                                <li class="order-last pb-2 flex-grow-1">
                                                                    <span class="file-label-text"><i class="bi bi-image text-24 text-muted" aria-hidden="true"></i> <br> Upload images</span>
                                                                </li>
                                                            </ul>
                                                            <div id="imagePreviewArea">
                                                                <!-- Preview images will appear here -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="px-4 btn btn-primary">Submit Your Requirement</button>
                                        </div>
                                        
                                    </form>
                                    <div class="text-end">
                                            <button type="button" class="btn btn-outline ms-2 text-primary" data-bs-toggle="collapse" data-bs-target="#requirementInfoCollapse" aria-expanded="false" aria-controls="requirementInfoCollapse">
                                                Skip requirement 
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
    
</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var toggleButton1 = document.getElementById('toggleRequirementInfoButton');
        var requirementInfoCollapse = document.getElementById('requirementInfoCollapse');
        var requirementInfoLabel = document.getElementById('requirementInfoLabel');
        requirementInfoCollapse.addEventListener('show.bs.collapse', function () {
            toggleButton1.style.display = 'none';
            requirementInfoLabel.style.display = 'none';
        });
        requirementInfoCollapse.addEventListener('hide.bs.collapse', function () {
            toggleButton1.style.display = 'block';
            requirementInfoLabel.style.display = 'block';
        });

        // image
        const radioButtons = document.querySelectorAll('input[name="image_type"]');
        const productHasImgDiv = document.querySelector('.product-has-img');
        const fileInput = document.getElementById('buyRequirementImage');
        const selectedFileList = document.querySelector('.selected-file-list');
        const imagePreviewArea = document.getElementById('imagePreviewArea');

        radioButtons.forEach(radio => {
            radio.addEventListener('change', function () {
                if (this.value === '1') {
                    productHasImgDiv.style.display = 'block';
                } else {
                    productHasImgDiv.style.display = 'none';
                    clearFileList();
                }
            });
        });

        fileInput.addEventListener('change', function () {
            updateImagePreview();
        });

        function clearFileList() {
            selectedFileList.innerHTML = '<li class="order-last pb-2 flex-grow-1"><span class="file-label-text"><i class="bi bi-image text-24 text-muted" aria-hidden="true"></i> <br> Upload images</span></li>';
            imagePreviewArea.innerHTML = ''; // Clear the preview area
            fileInput.value = '';
        }

        function updateImagePreview() {
            // Clear previous previews
            imagePreviewArea.innerHTML = '';

            Array.from(fileInput.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '100px';
                    img.style.height = '100px';
                    img.classList.add('img-preview'); // Optional: Add a class for styling
                    imagePreviewArea.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        }
    });
</script>
<style>
    
</style>
@endsection
