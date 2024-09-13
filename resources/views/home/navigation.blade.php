<div class="topnav">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #FEF5F4;">
        <div class="container custom-container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo" width="200" height="55" class="align-text-top d-inline-block">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="px-3 mb-2 navbar-nav ms-auto mb-lg-0">
                    @include('home.modal')
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#softwareModal">
                            Software
                            <i class="bi bi-chevron-compact-down ms-2 bold-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#serviceModal">
                            Service
                            <i class="bi bi-chevron-compact-down ms-2 bold-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#businessModal">
                            B2 for Business
                            <i class="bi bi-chevron-compact-down ms-2 bold-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="#" id="dealsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            $ Deals
                        </a>
                    </li>
                </ul>
                <ul class="mb-2 navbar-nav mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-review me-2" href="#">Write a Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sign" href="{{ url('business_listing') }}">Join or Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
</div>