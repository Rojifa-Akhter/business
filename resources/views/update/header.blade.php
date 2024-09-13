
<style>
    /* Custom styles for navigation links */
    .navbar-brand img {
        max-height: 60px; /* Adjust as needed */
        width: auto;
    }
    .position-relative {
        position: relative;
    }
    .count {
        position: absolute;
        top: -6px;
        right: -5px;
        background-color: #0082FC;
        color: white;
        padding: 0px 3px;
        border-radius: 50%;
        font-size: 10px;
    }
    /* Dropdown Toggle */
    .dropdown-toggle {
        cursor: pointer;
    }
    /* Dropdown Menu */
    .dropdown-menu {
        min-width: 250px; /* Adjust width as needed */
        position: absolute;
        right: 0;
    }
    /* Dropdown Header */
    .dropdown-header {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #ddd; /* Add border to separate header items */
        padding: 0.5rem;
    }
    /* Dropdown Header Item */
    .dropdown-header-item {
        flex: 1;
        padding: 0 0.5rem;
    }
    /* Dropdown Item */
    .dropdown-item {
        padding: 0.5rem 1rem;
        display: flex;
        align-items: center;
        color: #333; /* Adjust color as needed */
        text-decoration: none;
    }
    .dropdown-item:hover {
        background-color: #f8f9fa; /* Light background color on hover */
    }
    /* Dropdown Item Icons */
    .dropdown-item i {
        font-size: 1.2rem; /* Adjust icon size */
        margin-right: 0.5rem;
    }
    /* Text Wrap */
    .text-wrap {
        white-space: normal; /* Ensure text wraps properly */
    }
    /* Dropdown Divider */
    .dropdown-divider {
        margin: 0.5rem 0;
    }
    /* Ensure navbar stays at top */
    .navbar {
        z-index: 1030; /* Bootstrap’s default z-index for sticky navbar */
    }
    .header-user {
        position: relative;
    }
    .nav-link .bi,
    .nav-link .fa {
        font-size: 1.2rem; /* Ensure all icons are the same size */
        margin-right: 0.5rem; /* Add some spacing to the right */
    }
    .header-user .box-30 {
        cursor: pointer;
    }

    .dropdown-menu {
        padding: 0.5rem 1rem; /* Ensure proper padding */
        border: 1px solid #ddd; /* Add border for better visibility */
    }
    .dropdown-menu .dropdown-item {
        padding: 0.5rem 0; /* Adjust padding for dropdown items */
    }
</style>
<nav class="bg-white navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container custom-container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="">
            <img src="img/logo.png" alt="Logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="mr-3 nav-item dropdown">
                    <a href="" data-toggle="dropdown" class="nav-link"><span class="mr-1"><i class="fa fa-home text-theme"></i></span> DOB</a>
                    <div class="dropdown-menu rounded-0">
                        <a href="" target="_blank" class="px-3 dropdown-item d-flex"><span class="mr-2"><i class="fa fa-home text-theme"></i></span> Home</a>
                        <a href="" target="_blank" class="px-3 dropdown-item d-flex"><span class="mr-2"><i class="fa fa-cube text-theme"></i></span> Products</a>
                        <a href="" target="_blank" class="px-3 dropdown-item d-flex"><span class="mr-2"><i class="fa fa-list-ul text-theme"></i></span> Business Directory</a>
                        <a href="" target="_blank" class="px-3 dropdown-item d-flex"><span class="mr-2"><i class="fa fa-eraser text-theme"></i></span> DOB Trade</a>
                        <a href="" target="_blank" class="px-3 dropdown-item d-flex"><span class="mr-2"><i class="fa fa-industry text-theme"></i></span> Companies</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('support-center') }}"><span class="mr-1"><i class="fa fa-spinner fa-spin text-theme"></i></span> Help Center</a>
                </li>
                <li class="mr-3 nav-item">
                    <a class="nav-link" href="{{ url('pricing') }}"><span class="mr-1"><i class="fa fa-trophy text-theme"></i></span> Membership</a>
                </li>
                <li class="mr-3 nav-item">
                    <a class="nav-link" href="{{ url('setting') }}"><span class="mr-1"><i class="fa fa-cog text-theme"></i></span> Settings</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center order-lg-1">
            <a href="{{ url('communication') }}" class="mt-1 nav-link">
                <span class="position-relative">
                    <i class="bi bi-envelope text-14 text-muted"></i> <!-- Adjusted icon size -->
                    <span class="count">0</span>
                </span>
            </a>
            <div class="px-3 nav-link dropdown header-user">
                <div data-toggle="dropdown">
                    <span class="box-30 cursor rounded-circle bg-login-icon">
                        <i class="mr-2 bi bi-person-circle text-theme text-14"></i> <!-- Adjusted icon size -->
                    </span>
                </div>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="py-2 d-flex justify-content-between align-self-center mx-n2">
                        <div class="px-2 border-right">
                            <a href="{{ url('update-profile') }}" class="py-0 dropdown-item"><i class="mr-2 fa fa-dashboard text-theme"></i> Dashboard</a>
                        </div>
                        <div class="px-2">
                            <a href="" class="py-0 dropdown-item"><i class="mr-2 fa fa-sign-out text-theme text-14"></i> Logout</a>
                        </div>
                    </div>
                    <a href="{{ url('communication') }}" class="dropdown-item"><i class="mr-2 bi bi-envelope text-theme text-14"></i> Inbox</a>
                    <a href="{{ url('update-profile') }}" class="dropdown-item"><i class="mr-2 bi bi-person-gear text-theme text-14"></i> Update Profile</a>
                    <a href="{{ url('product') }}" class="dropdown-item"><i class="mr-2 fa fa-cube text-theme text-14"></i> My Products</a>
                    <div class="dropdown-divider"></div>
                    <a href="" class="dropdown-item text-wrap">
                        Submit Buy Requirement
                        <br>
                        Submit your buying needs to get quotes from top suppliers.
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

