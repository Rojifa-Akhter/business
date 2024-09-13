@extends('update.index')
@section('alert')
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
                                            <span class="mr-2"><i class="bi bi-chevron-compact-right"></i></span> Company/certificates Videos
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
                <div class=" card">
                        <div class="d-md-flex no-gutters">
                            <div class=" col-md-2 d-flex justify-content-center align-items-center" style="background-color: #96e0e8">
                                <i class="bi bi-bell" style="font-size: 3rem;"></i>
                            </div>
                            <div class="p-2 col-md-10 d-md-flex flex-grow-1">
                                <div class="p-3 flex-grow-1">
                                    <h4> B2B Trade Alert</h4>
                                    <p>Get instant b2b leads delivered to your inbox! Upgrade now to connect with buyers instantly. Receive new buy requirements and trade leads for products that match your interests.</p>
                                    <small class="text-muted">* This service is exclusively for B2bmap.com Premium Members.</small>
                                </div>
                                <div class="px-5 py-3 text-center align-self-center">
                                    <a href="{{ url('pricing') }}" class="btn btn-outline-secondary text-nowrap w-100 text-black-to-white" style="padding: 10px 20px; font-size: 1.2rem;">Upgrade Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</main>

@endsection
