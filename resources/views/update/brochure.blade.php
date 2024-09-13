@extends('update.index')
@section('brochure')
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
                                <a href="#" class="user-aside-menu-link">
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
                                        <a href="#" class="user-aside-submenu-link">
                                            <span class="mr-2"><i class="bi bi-chevron-compact-right"></i></span> Company/Products Videos
                                        </a>
                                    </li>
                                </ul>
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
                        <h4 id="brochureInfoLabel" class="py-3 mb-4 text-center">You haven't added any brochure yet</h4>
                        <div class="form-container">
                            <div class="mb-4 d-flex justify-content-center">
                                <button id="toggleBrochureInfoButton" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#brochureInfoCollapse" aria-expanded="true" aria-controls="brochureInfoCollapse">
                                    <i class="bi bi-plus-lg"></i> Add New Brochure
                                </button>
                            </div>
                            <div id="brochureInfoCollapse" class="accordion-collapse collapse" aria-labelledby="brochureInfoHeading" data-bs-parent="#accordionbrochureInfo">
                                <div class="form-body" style="margin-left: 10%; margin-right: 10%;">
                                    <div class="mb-3 border-bottom mb-lg-4">
                                        <h3 class="text-primary">Add Brochure</h3>
                                        <p class="text-muted">Provide complete information about your brochure or services, since it helps you to increase your rankings in our search results.</p>
                                    </div>
                                    <form>
                                        <div class="mb-3 form-group row mb-lg-4">
                                            <label class="col-lg-4 text-secondary" for="title">Brochure Title <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" name="title" id="title" placeholder="Enter Brochure Title" class="form-control char-count check-brochure-url">
                                                <span class="px-1 slug-info"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-group row mb-lg-4">
                                            <label for="brochure" class="col-lg-4 col-form-label text-secondary">Select Brochure <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                    <input type="file" name="brochure" id="brochure" accept="image/*,.pdf" class="form-control" aria-describedby="brochureHelp">
                                                </div>
                                                <small id="brochureHelp" class="form-text text-muted"></small>
                                            </div>
                                        </div>                                        
                                        <div class="text-center">
                                            <button type="submit" class="px-4 btn btn-primary">Submit Brochure</button>
                                        </div>
                                        
                                    </form>
                                    <div class="text-end">
                                        <button type="button" class="btn btn-outline ms-2 text-primary" data-bs-toggle="collapse" data-bs-target="#brochureInfoCollapse" aria-expanded="false" aria-controls="brochureInfoCollapse">
                                            Skip Brochure Info
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
        var toggleButton1 = document.getElementById('toggleBrochureInfoButton');
        var brochureInfoCollapse = document.getElementById('brochureInfoCollapse');
        var brochureInfoLabel = document.getElementById('brochureInfoLabel');
        brochureInfoCollapse.addEventListener('show.bs.collapse', function () {
            toggleButton1.style.display = 'none';
            brochureInfoLabel.style.display = 'none';
        });
        brochureInfoCollapse.addEventListener('hide.bs.collapse', function () {
            toggleButton1.style.display = 'block';
            brochureInfoLabel.style.display = 'block';
        });
       
    });
</script>
<style>
    
</style>
@endsection
