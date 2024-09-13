@extends('backend.master')
@section('content')
<div class="app-body">
    <!-- Row start -->
    <div class="row gx-3">
        <div class="col-xl-8 col-sm-12 col-12">
            <div class="mb-3 card">
                <div class="card-body height-230">
                    <div class="row align-items-end">
                        <div class="col-sm-8">
                            <h3 class="mb-4">Congratulations Franklin 🎉</h3>
                            <p>
                                You have sold
                                <span class="text-success fw-bold">65%</span> more
                                products than last year.
                            </p>
                            <div class="flex-wrap gap-3 mt-4 d-flex">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box lg grd-info-light rounded-5 me-3">
                                        <i class="bi bi-bag text-info fs-3"></i>
                                    </div>
                                    <div class="m-0">
                                        <h3 class="m-0 fw-semibold">$4800</h3>
                                        <p class="m-0 text-secondary">This Year</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="icon-box lg grd-danger-light rounded-5 me-3">
                                        <i class="bi bi-bag text-danger fs-3"></i>
                                    </div>
                                    <div class="m-0">
                                        <h3 class="m-0 fw-semibold">$2300</h3>
                                        <p class="m-0 text-secondary">Last Year</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <img src="assets/images/sales.svg" class="congrats-img" alt="Bootstrap Gallery" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-12 col-12">
            <div class="mb-3 card grd-primary">
                <div class="card-body bg-hexagon height-230">
                    <h5 class="text-white card-title">Overall Sales</h5>
                    <div id="sales"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gx-3">
        <div class="col-12">
            <div class="mb-3 card">
                <div class="card-header">
                    <h5 class="card-title">Revenue</h5>
                </div>
                <div class="card-body">
                    <div id="revenue"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gx-3">
        <div class="col-xl-6 col-12">
            <div class="mb-3 card">
                <div class="card-header">
                    <h5 class="card-title">Pageviews</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Link</th>
                                    <th>Page Title</th>
                                    <th>Visitors</th>
                                    <th>Percentage</th>
                                    <th>Growth</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="grd-info-light">
                                    <td>
                                        <a href="javascript:void()" class="text-danger">
                                            <i class="bi bi-box-arrow-up-right fs-3"></i>
                                        </a>
                                    </td>
                                    <td>Home</td>
                                    <td>56,000</td>
                                    <td>
                                        <div class="progress lg progress-spacer">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="m-0 text-info">8% high</p>
                                    </td>
                                </tr>
                                <tr class="grd-success-light">
                                    <td>
                                        <a href="javascript:void()" class="text-danger">
                                            <i class="bi bi-box-arrow-up-right fs-3"></i>
                                        </a>
                                    </td>
                                    <td>About</td>
                                    <td>35,000</td>
                                    <td>
                                        <div class="progress lg progress-spacer">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="m-0 text-success">12% low</p>
                                    </td>
                                </tr>
                                <tr class="grd-warning-light">
                                    <td>
                                        <a href="javascript:void()" class="text-danger">
                                            <i class="bi bi-box-arrow-up-right fs-3"></i>
                                        </a>
                                    </td>
                                    <td>Contact</td>
                                    <td>28,000</td>
                                    <td>
                                        <div class="progress lg progress-spacer">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="m-0 text-warning">15% high</p>
                                    </td>
                                </tr>
                                <tr class="grd-danger-light">
                                    <td>
                                        <a href="javascript:void()" class="text-danger">
                                            <i class="bi bi-box-arrow-up-right fs-3"></i>
                                        </a>
                                    </td>
                                    <td>Services</td>
                                    <td>33,000</td>
                                    <td>
                                        <div class="progress lg progress-spacer">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="m-0 text-danger">9% high</p>
                                    </td>
                                </tr>
                                <tr class="grd-primary-light">
                                    <td>
                                        <a href="javascript:void()" class="text-danger">
                                            <i class="bi bi-box-arrow-up-right fs-3"></i>
                                        </a>
                                    </td>
                                    <td>Products</td>
                                    <td>98,000</td>
                                    <td>
                                        <div class="progress lg progress-spacer">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="m-0 text-primary">3% low</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="mb-3 card">
                <div class="card-header">
                    <h5 class="card-title">Clicks</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Link</th>
                                    <th>Page Title</th>
                                    <th>Visitors</th>
                                    <th>Percentage</th>
                                    <th>Growth</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="grd-info-light">
                                    <td>
                                        <a href="javascript:void()" class="text-danger">
                                            <i class="bi bi-box-arrow-up-right fs-3"></i>
                                        </a>
                                    </td>
                                    <td>Home</td>
                                    <td>56,000</td>
                                    <td>25%</td>
                                    <td>
                                        <p class="m-0 text-info">8% high</p>
                                    </td>
                                </tr>
                                <tr class="grd-success-light">
                                    <td>
                                        <a href="javascript:void()" class="text-danger">
                                            <i class="bi bi-box-arrow-up-right fs-3"></i>
                                        </a>
                                    </td>
                                    <td>About</td>
                                    <td>35,000</td>
                                    <td>23%</td>
                                    <td>
                                        <p class="m-0 text-success">12% low</p>
                                    </td>
                                </tr>
                                <tr class="grd-warning-light">
                                    <td>
                                        <a href="javascript:void()" class="text-danger">
                                            <i class="bi bi-box-arrow-up-right fs-3"></i>
                                        </a>
                                    </td>
                                    <td>Contact</td>
                                    <td>28,000</td>
                                    <td>18%</td>
                                    <td>
                                        <p class="m-0 text-warning">15% high</p>
                                    </td>
                                </tr>
                                <tr class="grd-danger-light">
                                    <td>
                                        <a href="javascript:void()" class="text-danger">
                                            <i class="bi bi-box-arrow-up-right fs-3"></i>
                                        </a>
                                    </td>
                                    <td>Services</td>
                                    <td>33,000</td>
                                    <td>12%</td>
                                    <td>
                                        <p class="m-0 text-success">9% high</p>
                                    </td>
                                </tr>
                                <tr class="grd-primary-light">
                                    <td>
                                        <a href="javascript:void()" class="text-danger">
                                            <i class="bi bi-box-arrow-up-right fs-3"></i>
                                        </a>
                                    </td>
                                    <td>Products</td>
                                    <td>98,000</td>
                                    <td>16%</td>
                                    <td>
                                        <p class="m-0 text-primary">3% low</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gx-3">
        <div class="col-xl-8 col-12">
            <div class="mb-3 card">
                <div class="card-header">
                    <h5 class="card-title">Real Time</h5>
                </div>
                <div class="card-body">
                    <div id="world-map-markers3" class="chart-height-lg position-relative"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <div class="mb-3 card">
                <div class="card-header">
                    <h5 class="card-title">Source / Medium</h5>
                </div>
                <div class="card-body">
                    <div id="sourceMedium" class="auto-align-graph"></div>
                    <div class="text-center">
                        <h2 class="m-0 fw-semibold">
                            890
                            <i class="bi bi-arrow-up-right-circle-fill text-success ms-1"></i>
                        </h2>
                        <p class="text-truncate">7% higher than last year.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->

</div>
@endsection