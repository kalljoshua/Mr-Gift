@extends('...layouts.admin_layout')
@section('title')
    <title>::Mr.Gift::Admin</title>
@endsection

@section('content')
    <div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-primary bg-darken-2">
                                    <i class="icon-camera font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-gradient-x-primary white media-body">
                                    <h5>Products</h5>
                                    <h5 class="text-bold-400 mb-0"><i class="fa fa-plus"></i>0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-danger bg-darken-2">
                                    <i class="icon-user font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-gradient-x-danger white media-body">
                                    <h5>Total Users</h5>
                                    <h5 class="text-bold-400 mb-0"><i class="fa fa-arrow-up"></i>2</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-warning bg-darken-2">
                                    <i class="icon-basket-loaded font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-gradient-x-warning white media-body">
                                    <h5>Total Orders</h5>
                                    <h5 class="text-bold-400 mb-0"><i class="fa fa-arrow-down"></i>0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-success bg-darken-2">
                                    <i class="icon-wallet font-large-2 white"></i>
                                </div>
                                <div class="p-2 bg-gradient-x-success white media-body">
                                    <h5>Total Profit</h5>
                                    <h5 class="text-bold-400 mb-0"><i class="fa fa-arrow-up"></i>UGX.0</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Stats -->
            <!--Product sale & buyers -->
            <div class="row match-height">
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Products Sales</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="reload"><i class="fa fa-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="fa fa-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div id="products-sales" class="height-300"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent Buyers</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="reload"><i class="fa fa-rotate-cw"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content px-1">
                            <div id="recent-buyers" class="media-list height-300 position-relative">
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online">
                                <img class="media-object rounded-circle" 
                                     src="/admin_inc/app-assets/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                            <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                                        <h6 class="list-group-item-heading">Ruraara 
                                            <span class="font-medium-4 float-right pt-1">UGX.80000</span></h6>
                                        <p class="list-group-item-text mb-0"><span class="badge badge-primary">Birthday</span><span class="badge badge-warning ml-1">Cake</span></p>
                                    </div>
                                </a>
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-away"><img class="media-object rounded-circle" src="/admin_inc/app-assets/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                            <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                                        <h6 class="list-group-item-heading">Anitah<span class="font-medium-4 float-right pt-1">UGX.1,00,000</span></h6>
                                        <p class="list-group-item-text mb-0"><span class="badge badge-danger">Gadgets</span>Phone</p>
                                    </div>
                                </a>
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-busy"><img class="media-object rounded-circle" src="/admin_inc/app-assets/images/portrait/small/avatar-s-9.png" alt="Generic placeholder image">
                            <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                                        <h6 class="list-group-item-heading">Hakiza<span class="font-medium-4 float-right pt-1">UGX.3000</span></h6>
                                        <p class="list-group-item-text mb-0"><span class="badge badge-primary">Gift Cards</span> <span class="badge badge-success ml-1">Card</span></p>
                                    </div>
                                </a>
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online"><img class="media-object rounded-circle" src="/admin_inc/app-assets/images/portrait/small/avatar-s-10.png" alt="Generic placeholder image">
                            <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                                        <h6 class="list-group-item-heading">Ken Akena<span class="font-medium-4 float-right pt-1">$2,815</span></h6>
                                        <p class="list-group-item-text mb-0"><span class="badge badge-warning">Baby Shower</span> <span class="badge badge-danger ml-1">Tedy Bear</span></p>
                                    </div>
                                </a>
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online"><img class="media-object rounded-circle" src="/admin_inc/app-assets/images/portrait/small/avatar-s-11.png" alt="Generic placeholder image">
                            <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                                        <h6 class="list-group-item-heading">Naume<span class="font-medium-4 float-right pt-1">UGX.50000</span></h6>
                                        <p class="list-group-item-text mb-0"><span class="badge badge-primary">Toys</span><span class="badge badge-warning ml-1">Doll</span></p>
                                    </div>
                                </a>
                                <a href="#" class="media border-0">
                                    <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-away"><img class="media-object rounded-circle" src="/admin_inc/app-assets/images/portrait/small/avatar-s-12.png" alt="Generic placeholder image">
                            <i></i>
                            </span>
                                    </div>
                                    <div class="media-body w-100">
                                        <h6 class="list-group-item-heading">Lawrence<span class="font-medium-4 float-right pt-1">UGX.1000</span></h6>
                                        <p class="list-group-item-text mb-0"><span class="badge badge-danger">Wedding</span>Card</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Product sale & buyers -->
            <!--Recent Orders & Monthly Salse -->
            <div class="row match-height">
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent Orders</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="reload"><i class="fa fa-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="fa fa-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p>Total paid invoices 240, unpaid 150. <span class="float-right"><a href="project-summary.html" target="_blank">Invoice Summary <i class="fa fa-arrow-right"></i></a></span></p>
                            </div>
                            <div class="table-responsive">
                                <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                                    <thead>
                                    <tr>
                                        <th>SKU</th>
                                        <th>Invoice#</th>
                                        <th>Customer Name</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-truncate">PO-10521</td>
                                        <td class="text-truncate"><a href="#">INV-001001</a></td>
                                        <td class="text-truncate">Elizabeth W.</td>
                                        <td class="text-truncate"><span class="badge badge-default badge-success">Paid</span></td>
                                        <td class="text-truncate">$ 1200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">PO-532521</td>
                                        <td class="text-truncate"><a href="#">INV-01112</a></td>
                                        <td class="text-truncate">Doris R.</td>
                                        <td class="text-truncate"><span class="badge badge-default badge-warning">Overdue</span></td>
                                        <td class="text-truncate">$ 5685.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">PO-05521</td>
                                        <td class="text-truncate"><a href="#">INV-001012</a></td>
                                        <td class="text-truncate">Andrew D.</td>
                                        <td class="text-truncate"><span class="badge badge-default badge-success">Paid</span></td>
                                        <td class="text-truncate">$ 152.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">PO-15521</td>
                                        <td class="text-truncate"><a href="#">INV-001401</a></td>
                                        <td class="text-truncate">Megan S.</td>
                                        <td class="text-truncate"><span class="badge badge-default badge-success">Paid</span></td>
                                        <td class="text-truncate">$ 1450.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate">PO-32521</td>
                                        <td class="text-truncate"><a href="#">INV-008101</a></td>
                                        <td class="text-truncate">Walter R.</td>
                                        <td class="text-truncate"><span class="badge badge-default badge-warning">Overdue</span></td>
                                        <td class="text-truncate">$ 685.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body sales-growth-chart">
                                <div id="monthly-sales" class="height-250"></div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="chart-title mb-1 text-center">
                                <h6>Total monthly Sales.</h6>
                            </div>
                            <div class="chart-stats text-center">
                                <a href="#" class="btn btn-sm btn-primary mr-1">Statistics <i class="fa fa-bar-chart"></i></a> <span class="text-muted">for the last year.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Recent Orders & Monthly Salse -->
            <!-- Social & Weather -->
            <div class="row match-height">
                <div class="col-xl-4 col-lg-12">
                    <div class="card bg-gradient-x-danger">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="animated-weather-icons text-center float-left">
                                    <svg version="1.1" id="cloudHailAlt2" class="climacon climacon_cloudHailAlt climacon-blue-grey climacon-darken-2 height-100" viewBox="15 15 70 70">
                                        <g class="climacon_iconWrap climacon_iconWrap-cloudHailAlt">
                                            <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                                                <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                                    <circle cx="42" cy="65.498" r="2"></circle>
                                                </g>
                                                <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                                    <circle cx="49.999" cy="65.498" r="2"></circle>
                                                </g>
                                                <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                                    <circle cx="57.998" cy="65.498" r="2"></circle>
                                                </g>
                                                <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                                    <circle cx="42" cy="65.498" r="2"></circle>
                                                </g>
                                                <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                                    <circle cx="49.999" cy="65.498" r="2"></circle>
                                                </g>
                                                <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                                    <circle cx="57.998" cy="65.498" r="2"></circle>
                                                </g>
                                            </g>
                                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.941v-4.381c2.39-1.384,3.999-3.961,3.999-6.92c0-4.417-3.581-8-7.998-8c-1.602,0-3.084,0.48-4.334,1.291c-1.23-5.317-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.55,6.728,3.999,8.924v4.916c-4.776-2.768-7.998-7.922-7.998-13.84c0-8.835,7.162-15.997,15.997-15.997c6.004,0,11.229,3.311,13.966,8.203c0.663-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.372,11.998,12C71.998,58.863,68.656,63.293,63.999,64.941z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    </div>
    <script src="/admin_inc/app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>
    <script src="/admin_inc/app-assets/js/scripts/pages/dashboard-ecommerce.js" type="text/javascript"></script>
@endsection