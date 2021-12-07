<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link @php if($pageName == 'Dashboard') { echo ''; } else { echo 'collapsed'; } @endphp" href="{{ url('/index') }}">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link @php if($pageName == 'Users') { echo ''; } else { echo 'collapsed'; } @endphp" href="{{ url('/users') }}">
              <i class="bi bi-people"></i>
              <span>Users</span>
            </a>
        </li><!-- End Users Nav -->

        <li class="nav-item">
            <a class="nav-link @php if($pageName == 'Bank Deposits') { echo ''; } else { echo 'collapsed'; } @endphp" href=""  data-bs-toggle="modal" data-bs-target="#bankDeposits">
                <i class="bi bi-bank"></i>
                <span>Bank Deposits</span>
            </a>
        </li><!-- End Bank Deposits Nav -->

        <li class="nav-item">
            <a class="nav-link @php if($pageName == 'Make Payment') { echo ''; } else { echo 'collapsed'; } @endphp" data-bs-target="#payments-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-credit-card"></i><span>Make Payment</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="payments-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#singlePayment">
                        <i class="bi bi-circle"></i><span>Single Payment</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#bulkPayment">
                            <i class="bi bi-circle"></i><span>Bulk Payment</span>
                    </a>
                </li>
                <li>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#internationalPayment">
                            <i class="bi bi-circle"></i><span>International Payment</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Payment Nav  -->

        <li class="nav-item">
            <a class="nav-link @php if($pageName == 'Deposits') { echo ''; } else if($pageName == 'Reversals') { echo ''; } else if($pageName == 'Business Statement') { echo ''; } else { echo 'collapsed'; }  @endphp" data-bs-target="#reports-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="reports-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                <a href="{{ url('/deposits') }}">
                        <i class="bi bi-piggy-bank"></i><span>Deposits</span>
                    </a>
                </li><!-- End Deposits -->
                <li>
                    <a href="{{ url('/reversals') }}">
                        <i class="bi bi-arrow-left-right"></i><span>Reversals</span>
                    </a>
                </li><!-- End Reversals -->
                <li>
                    <a href="{{ url('/statement') }}">
                        <i class="bi bi-journal-text"></i><span>Business Statement</span>
                    </a>
                </li><!-- End Statements -->
            </ul>
        </li> <!-- End Reports  -->

        <li class="nav-item">
            <a class="nav-link @php if($pageName == 'Vendors') { echo ''; } else { echo 'collapsed'; } @endphp" data-bs-target="#vendors-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-shop"></i><span>Vendors</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="vendors-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('/vendors') }}">
                        <i class="bi bi-circle"></i><span>Vendors</span>
                    </a>
                </li><!-- End Vendors -->
                <li>
                    <a href="{{ url('/pay-vendor') }}">
                        <i class="bi bi-circle"></i><span>Pay Vendor</span>
                    </a>
                </li><!-- End Pay Vendor -->
            </ul>
        </li> <!-- End Vendors Nav  -->
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link @php if($pageName == 'Sampay Developer') { echo ''; } else { echo 'collapsed'; } @endphp" href=""  data-bs-toggle="modal" data-bs-target="#sampayDeveloper">
                <i class="bi bi-code-slash"></i>
                <span>Sampay Developer</span>
            </a>
        </li><!-- End Bank Deposits Nav -->

        <li class="nav-item">
            <a class="nav-link @php if($pageName == 'Profile') { echo ''; } else { echo 'collapsed'; } @endphp" href="{{ url('/profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Nav -->

        <li class="nav-item">
            <a class="nav-link @php if($pageName == 'Contact') { echo ''; } else { echo 'collapsed'; } @endphp" href="{{ url('/contact') }}">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link @php if($pageName == 'Frequently Asked Questions') { echo ''; } else { echo 'collapsed'; } @endphp" href="{{ url('/faq') }}">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li>
        <!-- End F.A.Q Nav -->

        <!--<li class="nav-item">-->
        <!--    <a class="nav-link collapsed" href="login.php">-->
        <!--        <i class="bi bi-box-arrow-in-right"></i>-->
        <!--        <span>Login</span>-->
        <!--    </a>-->
        <!--</li>-->
        <!-- End Login Nav -->

        <!--<li class="nav-item">-->
        <!--    <a class="nav-link collapsed" href="register.php">-->
        <!--        <i class="bi bi-card-list"></i>-->
        <!--        <span>Register</span>-->
        <!--    </a>-->
        <!--</li>-->
        <!-- End Register Nav -->

    </ul>
</aside><!-- End Sidebar-->