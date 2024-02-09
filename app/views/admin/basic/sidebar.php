<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="ITPLlogo.png" alt="Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-dark h5 text-info p-2 ">ITPL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
			   with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Grievances -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fad fa-file-export"></i>
                        <p>
                            Grievance
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="supportTicket-dashboard" class="nav-link">
                                <i class="fa fa-plus-circle"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="supportTicket-categorygrievance" class="nav-link">
                                <i class="fa fa-plus-circle"></i>
                                <p>Category Grievance</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="supportTicket-lodgegrievance" class="nav-link">
                                <i class="fa fa-plus-circle"></i>
                                <p>Lodge Grievance</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Staff -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="staff-staffList" class="nav-link">
                                <i class="fa fa-list "></i>
                                <p>Staff List</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-clock"></i>
                                <p>
                                    Attendance
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <!-- Staff Attendance -->
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="staff-staffAttendance" class="nav-link">
                                        <i class="fa fa-plus-circle"></i>
                                        <p>Take Attendance</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="staff-staffAttendanceSetting" class="nav-link">
                                        <i class="fad fa-cogs"></i>
                                        <p>Setting</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="staff-staffAttendanceReports" class="nav-link">
                                        <i class="fa fa-list"></i>
                                        <p>Report</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="fa fa-university" aria-hidden="true"></i>                        
                        <p>
                            Loans
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="loan-Home" class="nav-link">
                            <i class="fa fa-folder" aria-hidden="true"></i>
                                <p>Home</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="loan-loanRequest" class="nav-link">
                                <i class="fa fa-users"></i>
                                <p>View Loan Request</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="loan-bankStatement" class="nav-link">
                                <i class="fa fa-users"></i>
                                <p>Bank Statement</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-users"></i>
                                <p>History</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- products -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="fa fa-folder" aria-hidden="true"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="products-product" class="nav-link">
                                <i class="fa fa-list-alt nav-icon text-info"></i>
                                <p>Manage Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="products-productsubscription" class="nav-link">
                                <i class="fa fa-bell nav-icon text-info"></i>
                                <p> Product Subscription</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="products-productversion" class="nav-link">
                                <i class="fa fa-list-alt nav-icon text-info"></i>
                                <p> Product Version</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="products-managebasedfilepath" class="nav-link">
                                <i class="fa fa-list-alt nav-icon text-info"></i>
                                <p> Product Based Files</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="products-viewleads" class="nav-link">
                                <i class="fa fa-list-alt nav-icon text-info"></i>
                                <p> View Leads</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- support -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-wrench"></i>
                        <p>
                            Support
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="supports-support" class="nav-link">
                                <i class="fa fa-key"></i>
                                <p>Reset Password</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- settings -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fad fa-cogs"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="settings-prayagedulinks" class="nav-link">
                                <i class="fas fa-school nav-icon"></i>
                                <p>Prayagedu Links</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="settings-school" class="nav-link">
                                <i class="fas fa-school nav-icon"></i>
                                <p>School</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="changepassword" class="nav-link">
                                <i class="fas fa-key nav-icon"></i>
                                <p>Change Password</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="settings-state" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add State</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="settings-district" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Add District</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="settings-selectserver" class="nav-link">
                           <i class="fas fa-server"></i>
                              <p>Start Up Server</p>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="settings-addserver" class="nav-link">
                                <i class="fas fa-server"></i>
                                <p> Manage Server</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="settings-managedepartment" class="nav-link">
                                <i class="fas fa-building"></i>
                                <p> Manage Department</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- logout -->
                <li>
                    <a href="logout" class="nav-link btn btn-danger text-white text-left">
                        <i class="fas fa-lock nav-icon"></i>
                        <p class="">Logout</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<!-- jQuery -->
<script src="assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/admin/js/adminlte.js"></script>
<!-- Select2 -->
<script src="assets/admin/plugins/select2/js/select2.full.min.js"></script>

<!-- SweetAlert2 -->
<script src="assets/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="assets/admin/plugins/toastr/toastr.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<script src="assets/js/CallService.js"></script>
<script src="assets/js/commonfunctions.js"></script>
<script src="assets/js/md5.js"></script>
<!-- <script src="assets/js/index.js"></script> -->