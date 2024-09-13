@extends('update.index')
@section('setting')
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
                        <h3>Company Information</h3>
                        <hr class="my-4">
                        <ul class="mb-0 list-unstyled setting-list error-list">
                            <li>
                            <div class="pb-3 border-bottom pb-lg-2">
                                <div class="row">
                                    <div class="col-6 col-lg-3">
                                        <span>Company Name</span>
                                    </div>
                                    <div class="text-right col-6 col-lg-3 order-lg-last">
                                        <a href=" " class="py-0 btn btn-sm btn-primary">Get Verified</a>
                                    </div>
                                    <div class="mt-2 col-lg-6 mt-lg-0">
                                        <p class="mb-0 text-muted d-flex">It - <span class="ml-1 text-danger"> Not verified</span> </p>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li>
                                <div class="pb-3 border-bottom pb-lg-2">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <span>DOB URL</span>
                                        </div>
                                        <div class="col-8 col-lg-7">
                                            <span class="text-info">Waiting for Approve</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                             <li>
                                <div class="pb-3 border-bottom pb-lg-2">
                                    <div class="row">
                                        <div class="col-6 col-lg-3">
                                            <span>Member Type</span>
                                        </div>
                                        <div class="text-right col-6 col-lg-3 order-lg-last">
                                            <a href="" class="py-0 btn btn-sm btn-primary"> View Details </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="text-muted"> Free </span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="pb-3 border-bottom pb-lg-2">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <span>Company Website</span>
                                        </div>
                                        <div class="col-9 col-lg-7">
                                            <span class="text-danger">No website</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="pb-3 border-bottom pb-lg-2">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <span>Contact Person</span>
                                        </div>
                                        <div class="col-9 col-lg-7">
                                            <span class="text-muted"> <span class="contact-person">Mr. user</span> ()</span>
                                        </div>
                                        <div class="text-right col-3 col-lg-2">
                                            <a href="#" data-toggle="collapse" data-target="#contactPersonCollapsable" class="text-muted-to-primary text-13 clear-error-message"><i class="fa fa-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="contactPersonCollapsable">
                                    <div class="pt-3 pb-4">
                                        <form action="" method="POST" id="saveContactPersonName">
                                            <input type="hidden" name="_token" value="g7iNo7sKPCg1Xo35hB9fxGexU2VF934uLqQldzks"> <div class="row">
                                                <div class="col-lg-9 offset-lg-3">
                                                    <div class="success-message"></div>
                                                        <div class="setting-form">
                                                            <div class="mb-3 form-group">
                                                                <label class="mb-3 text-secondary">Name</label>
                                                                    <div class="row ">
                                                                        <div class="col-md-2">
                                                                            <select name="title" class="form-control mw-100px text-secondary">
                                                                                <option value="Mr." selected=""> Mr </option>
                                                                                <option value="Ms."> Ms </option>
                                                                            </select>
                                                                            <span class="error title"></span>
                                                                        </div>
                                                                        <div class="col-md-10">
                                                                            <input type="text" name="name" class="form-control val-name" placeholder="Full Name">
                                                                            <span class="error name"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button type="submit" class="px-5 btn btn-sm btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="pb-3 border-bottom pb-lg-2">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <span>Email</span>
                                        </div>
                                        <div class="col-9 col-lg-7">
                                            <span class="text-muted new-email-address">mstrojifaakhter@gmail.com</span>
                                        </div>
                                        <div class="text-right col-3 col-lg-2">
                                            <a href="#" data-toggle="collapse" data-target="#emailAddressCollapsable" class="text-muted-to-primary text-13 clear-error-message "><i class="fa fa-edit"></i> Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="emailAddressCollapsable">
                                    <form method="POST" action="https://b2bmap.com/myzone/account-settings/send-email-verification-code" id="sendEmailVerificationCode">
                                        <input type="hidden" name="_token" value="g7iNo7sKPCg1Xo35hB9fxGexU2VF934uLqQldzks">
                                        <div class="pt-3 pb-4">
                                            <div class="row">
                                                <div class="col-lg-9 offset-lg-3">
                                                    <div class="notification-message"></div>
                                                        <div class="mb-3 form-group">
                                                            <label class="mb-3">New Email Address</label>
                                                            <input type="email" name="email" placeholder="New email address" class="form-control val-email">
                                                            <span class="error email"></span>
                                                        </div>
                                                        <button type="submit" class="px-5 btn btn-sm btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form method="POST" action="" id="saveNewEmail" style="display: none">
                                            <input type="hidden" name="_token" value="g7iNo7sKPCg1Xo35hB9fxGexU2VF934uLqQldzks"> <div class="pt-3 pb-4">
                                            <div class="row">
                                                <div class="col-lg-9 offset-lg-3">
                                                    <div class="notification-message"></div>
                                                        <div class="form-group">
                                                            <label>Enter The Verification Code You Received at: <span class="success-message"></span></label>
                                                            <input type="text" name="ag_code" placeholder="Verification Code" class="form-control val-ag-code">
                                                            <span class="error ag_code"></span>
                                                        </div>
                                                    <button type="submit" class="px-5 btn btn-sm btn-primary">Verify</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </li>
                            <li>
                                <div class="pb-3 border-bottom pb-lg-2">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <span>Phone Number</span>
                                        </div>
                                        <div class="col-7 col-lg-7">
                                            <span class="text-muted phone-number">+8801987328765</span>
                                        </div>
                                    </div>
                                </div>                              
                            </li>
                            <li>
                                <div class="pb-2 border-bottom">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <span>Password</span>
                                        </div>
                                        <div class="col-9 col-lg-7">
                                            <span class="text-muted">***************</span>
                                        </div>
                                        <div class="text-right col-3 col-lg-2">
                                            <a href="#" data-toggle="collapse" data-target="#passwordCollapsable" class="text-muted-to-primary text-13 clear-error-message"><i class="fa fa-edit"></i> Change Password</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="passwordCollapsable">
                                    <div class="py-4">
                                        <div class="row">
                                            <div class="col-lg-9 offset-lg-3">
                                                <form action="" method="post" id="changePassword" class="setting-form">
                                                    <input type="hidden" name="_token" value=""> <div class="notification-message"></div>
                                                    <div class="success-message"></div>
                                                        <div class="password-input-group">
                                                            <div class="mb-3 form-group">
                                                                <input type="password" name="current_password" id="current_password" placeholder="Enter current password" class="form-control" aria-label="input">
                                                                <span class="error current_password"></span>
                                                            </div>
                                                            <div class="mb-3 form-group">
                                                                <input type="password" name="password" id="password" placeholder="Enter new password" class="form-control" aria-label="input">
                                                                <span class="error password"></span>
                                                            </div>
                                                            <div class="mb-3 form-group">
                                                                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm new password" class="form-control" aria-label="input">
                                                                <span class="error confirm_password"></span>
                                                            </div>
                                                            <button type="submit" class="px-4 btn btn-sm btn-primary">Change Password</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </li>
                        </ul>
                
                        
                    </div>
                </div>
            </div>
            
        </div>
        <div class="py-0" style="margin-left: 80%;">
            <div class="text-left">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#deactivateAccountModal" class="text-muted opacity-7">Deactivate My Account</a>
            </div>
            <div class="modal fade" id="deactivateAccountModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="border-0 modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Deactivate My Account</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="p-4 modal-body">
                            <div class="preloader">
                                <div class="loader"></div>
                            </div>
                            <form method="POST" action="" class="setting-form" id="submitDeactivateRequest">
                                <input type="hidden" name="_token" value="g7iNo7sKPCg1Xo35hB9fxGexU2VF934uLqQldzks">
                                <div class="success-message"></div>
                                <div class="mb-3 form-group">
                                    <label class="mb-3">Reason For Deactivate</label>
                                    <textarea name="reason" placeholder="Reason for deactivate account..." class="form-control val-reason"></textarea>
                                    <span class="error reason"></span>
                                </div>
                                <button type="submit" class="px-4 btn btn-sm btn-primary">Send Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</main>

@endsection
