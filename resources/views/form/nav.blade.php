<style>
    /* Custom styles for navigation links */
    .navbar-brand img {
            max-height: 60px; /* Adjust as needed */
            width: auto;
            
        }
        .btn-join-free {
            color: #fff;
            background-color: #007bff; /* Primary color */
            border-color: #007bff; /* Primary color */
        }
</style>

<nav class="bg-white navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container custom-container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="">
            <img src="img/logo.png" alt="Logo" class="img-fluid">
        </a>
        <a class="nav-link" href="{{ url('pricing') }}">Plans & Pricing</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('login') }}">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('business_listing') }}">
                        <span class="btn btn-sm btn-join-free">Join Free</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>