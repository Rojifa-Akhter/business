@extends('update.index')
@section('support-center')
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
                                <a href="{{ url('update-profile') }}" class="dashboard btn btn-lg-4 btn-primary">
                                    <span class="mr-2"><i class="bi bi-speedometer2"></i></span> Dashboard
                                </a>
                            </li>
                            <li class="user-aside-menu-item">
                                <a href="{{ url('communication') }}" class="mb-3 user-aside-menu-link text-primary">
                                    <span class="me-2"><i class="bi bi-envelope"></i></span> Inbox
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
                        <div class="mx-auto border conversation-body d-xl-down-block col-xl-10 pl-xl-4">
                            <div class="togglable-content hash-item-show d-lg-block show" data-target-hide="#askQuestionOption" id="askQuestion">
                                <form method="post" action="https://b2bmap.com/myzone/ticket" enctype="multipart/form-data">
                                    @csrf
                                    <div class="p-3 biz-card p-lg-4 px-xl-5">
                                        <div class="flex-wrap pb-2 mb-3 d-sm-flex justify-content-between mb-lg-4 border-bottom">
                                            <div>
                                                <h4 class="text-strong text-muted">Need help or have a Question? Ask DOBMAP</h4>
                                            </div>
                                        </div>
                                        <div class="mb-4 form-group row">
                                            <label for="questionTopic" class="col-lg-4 d-lg-down-none">Select Topic</label>
                                            <div class="col-lg-8">
                                                <select name="topic" class="form-control" id="selectedQuestionTopic">
                                                    <option value="">-- Select Topic --</option>
                                                    <option value="1">Using DOBMAP</option>
                                                    <option value="2">Somethings Not Working</option>
                                                    <option value="3">Suggest A Feature</option>
                                                    <option value="4">Billing &amp; Payments</option>
                                                    <option value="5">Upgrade Membership</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-4 form-group row">
                                            <label for="questionTitle" class="col-lg-4 d-lg-down-none">Question Title<span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" name="subject" value="" id="questionTitle" class="form-control" placeholder="Enter your question here">
                                            </div>
                                        </div>
                                        <div class="mb-4 form-group row">
                                            <label for="questionDescription" class="col-lg-4 d-lg-down-none">Question Details<span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea rows="4" name="description" id="questionDescription" class="form-control" placeholder="Enter details to get the best help"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-7 offset-lg-5 offset-xl-4">
                                                <div class="attach-file">
                                                    <div class="attach-file-input">
                                                        <input type="file" name="attach_file" id="ticket_attach_file" accept="image/*" placeholder="">
                                                    </div>
                                                    <label for="ticket_attach_file" class="text-muted" id="file-label">
                                                        <i class="fa fa-paperclip"></i> <span>Attach File</span>
                                                    </label>
                                                </div>
                                                <div class="pt-4 text-lg-left">
                                                    <button type="submit" class="px-5 btn btn-primary btn-md-down-small">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    document.getElementById('ticket_attach_file').addEventListener('change', function() {
        const fileInput = this;
        const fileLabel = document.getElementById('file-label');
        
        if (fileInput.files.length > 0) {
            fileLabel.innerHTML = `<i class="fa fa-paperclip"></i> <span>${fileInput.files[0].name}</span>`;
        } else {
            fileLabel.innerHTML = `<i class="fa fa-paperclip"></i> <span>Attach File</span>`;
        }
    });
</script>

@endsection
