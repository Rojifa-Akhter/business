@extends('update.index')
@section('communication')
<link rel="stylesheet" href="{{ 'css/profile.css' }}">

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
                            <h6 class="mb-0 text-center name text-strong counter-color-primary">
                                User
                            </h6>
                        </div>
                        <ul class="list-unstyled user-aside-menu-list d-flex flex-column">
                            <li class="px-3 mb-3 text-center user-aside-menu-item active current-page">
                                <a href=" {{ url('update-profile') }} " class="dashboard btn btn-lg-4 btn-primary">
                                    <span class="mr-2"><i class="bi bi-speedometer2"></i></span> Dashboard
                                </a>
                            </li>
                            <li class="user-aside-menu-item">
                                <a href="#" class="mb-3 user-aside-menu-link text-primary">
                                    <span class="me-2"><i class="bi bi-envelope"></i></span> Inbox
                                </a>
                                <ul class="chat-navigate-menu list-unstyled d-flex flex-column">
                                    <li class="chat-navigate-item">
                                        <a href="{{ url('communication') }}" class="px-3 mb-2 chat-navigate-link text-15 d-flex align-items-center text-primary">
                                            <span class="me-2"><i class="fa fa-inbox"></i></span> <b>Messages</b> 
                                            <span class="ms-auto badge-count bg-theme-light text-dark">0</span>
                                        </a>
                                    </li>
                                    <li class="chat-navigate-item">
                                        <a href="{{ url('important') }}" class="px-3 mb-2 chat-navigate-link text-15 d-flex align-items-center text-primary link-bordered">
                                            <span class="me-2"><i class="bi bi-star"></i></span> Important 
                                            <span class="ms-auto badge-count bg-theme-light text-dark">0</span>
                                        </a>
                                    </li>
                                    <li class="chat-navigate-item">
                                        <a href="{{ url('trade-alert') }}" class="px-3 mb-2 chat-navigate-link text-15 d-flex align-items-center text-primary link-bordered">
                                            <span class="me-2"><i class="bi bi-bell"></i></span> Trade Alert 
                                            <span class="ms-auto badge-count bg-theme-light text-dark">0</span>
                                        </a>
                                    </li>
                                    <li class="chat-navigate-item">
                                        <a href="{{ url('sent-mail') }}" class="px-3 chat-navigate-link text-15 d-flex align-items-center text-primary link-bordered">
                                            <span class="me-2"><i class="bi bi-send"></i></span> Sent 
                                            <span class="ms-auto badge-count bg-theme-light text-dark">0</span>
                                        </a>
                                    </li>
                                </ul>
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
            <div class="col-lg-9" style="margin-left: 20px">
                <div class="mb-4 card">
                    <div class="card-body">
                        <div class="border conversation-box d-xl-down-block row no-gutters" id="conversationBox">
                            <div class="conversation-aside d-xl-flex flex-column col-xl-4">                 
                                <div class="type-header d-xl-down-none">
                                    <div class="chat-filter-input-group">
                                        <input type="text" class="form-control chat-contact-filter" id="chatContactFilter" placeholder="Search Name">
                                        <a href="#" class="chat-contact-filter-clear" id="clearSearch">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </div>
                                </div>
                                                               
                                <div class="type-body">
                                    <div class="px-4 py-5 mt-5 d-block d-xl-none h-100 align-self-center">
                                       <p class="mb-0 text-center text-muted text-13">0 Message Found</p>
                                        <h3 class="text-center">Messages</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 conversation-body d-xl-down-none col-xl-8 align-self-center">
                                <p class="mb-0 text-center text-muted text-13">0 Message Found</p>
                                <h3 class="text-center">Messages</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto my-3 text-center text-13 col-lg-8 mr-lg-0">
            <i class="mr-1 fa fa-exclamation-circle text-danger" aria-hidden="true"></i> We urge you to be aware while dealing with any unknown Buyer or Seller. Always check all valid business documents like company registration certificate / company address proof etc before any kind of transaction.
        </div>
    </div>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var searchInput = document.getElementById('chatContactFilter');
        var clearButton = document.getElementById('clearSearch');

        // Function to toggle the visibility of the clear button
        function toggleClearButton() {
            if (searchInput.value.length > 0) {
                clearButton.style.display = 'block'; // Show clear button
            } else {
                clearButton.style.display = 'none'; // Hide clear button
            }
        }

        // Event listener for input changes
        searchInput.addEventListener('input', toggleClearButton);

        // Event listener for the clear button
        clearButton.addEventListener('click', function(event) {
            event.preventDefault(); 
            searchInput.value = ''; // Clear the input field
            toggleClearButton(); // Hide the clear button
            searchInput.focus(); // Optional: Refocus on the input field
        });

        // Initial check
        toggleClearButton();
    });
</script>


@endsection
