@extends('layouts.app');

@section('content')
<!-- Page Title -->
<div class="pagetitle">
  <h1>{{ isset($pageName) ? $pageName : 'Default' }}</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
      <li class="breadcrumb-item active">{{ isset($pageName) ? $pageName : 'Default' }}</li>
    </ol>
  </nav>
</div>
<!-- End Page Title -->

<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-sm-12">
            <div class="row">
                <!-- Wallet Card -->
                <div class="col-xxl-4 col-lg-4">
                    <div class="card info-card revenue-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                  <h6>Filter</h6>
                                </li>

                                <!--<li><a class="dropdown-item" href="#">Withdraws</a></li>-->
                                <li><a class="dropdown-item" href="deposits.php">Deposits</a></li>
                                <li><a class="dropdown-item" href="payments.php">Payments</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Available Balance</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-wallet2"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>ZMW 3,264</h6>
                                    <span class="text-success small pt-1 fw-bold">Account No:</span> <span class="text-muted small pt-2 ps-1">1760000280</span>
                                    <!--<span class="text-success small pt-1 fw-bold">Merchant Code:</span> <span class="text-muted small pt-2 ps-1">1760000280</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Wallet Card -->

                <!-- Transactions Card -->
                <div class="col-xxl-4 col-lg-4">
                    <div class="card info-card sales-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start"><h6>Filter</h6></li>
                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Transactions <span>| Today</span></h5>

                            <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <i class="bi bi-cart"></i>
                            </div>
                            <div class="ps-3">
                              <h6>145</h6>
                              <!--<span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>-->
                            </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Transactions Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-lg-4">

                    <div class="card info-card customers-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                  <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Customers <span>| This Year</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                  <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                  <h6>1244</h6>
                                  <!--<span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>-->
                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- End Customers Card -->

                <!-- Recent Transaction -->
                <div class="col-12">
                    <div class="card recent-sales">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                  <h6>Filter</h6>
                                </li>
                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Transactions <span>| Today</span></h5>

                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr class="font-size-14">
                                        <th scope="col">#</th>
                                        <th scope="col">Sender</th>
                                        <th scope="col">Receiver</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Charge</th>
                                        <th scope="col">Reference</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">In</th>
                                        <th scope="col">Out</th>
                                        <th scope="col">POP</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $x=100;
                                        for($i=1;$i<=$x;$i++){
                                    ?>
                                    <tr class="font-size-12">
                                      <th scope="row"><a href="#"><?= rand(1232,9000); ?></a></th>
                                      <td>Brandon Jacob</td>
                                      <td>John Banda</td>
                                      <td>ZMW 1,000,000.00</td>
                                      <td>ZMW 6</td>
                                      <td><?= rand(12323456784,52323456784); ?></td>
                                      <td>14:12:33</td>
                                      <td></td>
                                      <td></td>
                                      <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                      <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div><!-- End Recent Transaction -->

                <!-- Recent Activity -->
                <div class="col-12">
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                  <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                            <div class="activity">

                                <div class="activity-item d-flex">
                                    <div class="activite-label">32 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class="activity-content">
                                      Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">56 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                    <div class="activity-content">
                                      Voluptatem blanditiis blanditiis eveniet
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 hrs</div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class="activity-content">
                                      Voluptates corrupti molestias voluptatem
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">1 day</div>
                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                    <div class="activity-content">
                                      Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 days</div>
                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                    <div class="activity-content">
                                      Est sit eum reiciendis exercitationem
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">4 weeks</div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class="activity-content">
                                      Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                    </div>
                                </div><!-- End activity item-->
                            </div>
                        </div>
                    </div>
                </div><!-- End Recent Activity -->

            </div>
        </div>
        <!-- End Left side columns -->
    </div>
</section>
@endsection