<div class="mb-3 desktop-view-nav">
    <nav class="bg-white navbar navbar-expand-lg navbar-light fixed-top" style="z-index: 1030;">
        <div class="container custom-container">
            <a class="navbar-brand" href="">
                <img src="img/logo.png" alt="Logo" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="header" style="margin-left: 100px;">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="flex-wrap d-flex align-items-center">
                        <div class="biz-header-search" style="width: 420px;">
                            <form method="get" action="">
                                <div class="input-group biz-header-search-group">
                                    <input type="text" name="keyword" value="" title="Start search here" id="searchKeyword" placeholder="Search..." required="" aria-label="keyword" class="form-control">
                                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                                </div>
                            </form>
                        </div>                        
                        <div class="px-3 nav-item hide-on-mobile">
                            <a href=" " title="Post Buy Requirement" class="btn btn-grad-primary">Post Buy Requirement</a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav ms-auto hide-on-mobile">
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
        <div class="bg-white navbar navbar-expand-lg biz-menubar fixed-top" style="top: 70px; z-index: 1020;">
            <div class="collapse navbar-collapse show" id="bizMenubar">
                <ul class="navbar-nav biz-menu">
                    <li class="invisible nav-item d-lg-down-none">
                        <span class="px-5">DOB</span>
                    </li>
                    <li class="nav-item active">
                        <a href="" class="d-block">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="d-block">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="d-block">Business Directory</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="d-block">Buy Leads</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="d-block">Suppliers</a>
                    </li>
                </ul>
            </div>  
        </div>
    </nav>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var bizMenubar = document.querySelector('.biz-menubar');
    var lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            // Scrolling down
            bizMenubar.classList.add('hidden-on-scroll');
        } else {
            // Scrolling up
            bizMenubar.classList.remove('hidden-on-scroll');
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
    }, false);
});

</script>
