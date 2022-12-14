<div class="page-main-header">
    <div class="main-header-right row m-0">
        <div class="main-header-left pb-3 pt-0">
            <div class="logo-wrapper"><a href="#"><img class="img-fluid w-75"
                        src="{{ asset('assets/images/logo/dark-logo.png') }}" alt=""></a></div>
            <div class="dark-logo-wrapper w-75"><a href="#"><img class="img-fluid"
                        src="{{ asset('assets/images/logo/dark-logo.png') }}" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">
                </i></div>
        </div>
        <div class="left-menu-header col">

        </div>
        <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">

                <li class="onhover-dropdown p-0">
                    <a class="btn btn-primary-light" href="{{ route('admin.auth.logout') }}"><i
                            data-feather="log-out"></i>Log out</a>
                </li>
            </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
    </div>
</div>


<div class="page-body-wrapper horizontal-menu">
    <!-- Page Sidebar Start-->
    <header class="main-nav">
        <nav>
            <div class="main-navbar">
                <div id="mainnav">
                    <ul class="custom-scrollbar  nav-menu">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"></i>
                            </div>
                        </li>
                        <li class="dropdown"><a class="nav-link menu-title" href="#"><i
                                    class="fa fa-user"></i><span>Admin managment</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="{!! URL::route('admin.administrators.create') !!}">Create Admin</a></li>
                                <li><a href="{!! URL::route('admin.administrators.index') !!}">Manage Admin</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="nav-link menu-title" href="#"><i
                                    class="fa fa-user"></i><span>Catogires managment</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="create-catogires.php">Create Catogires</a></li>
                                <li><a href="manage-catogires.php">Manage Catogires</a></li>
                            </ul>
                        </li>


                        <li class="dropdown"><a class="nav-link menu-title link-nav" href="bookmark.html"><i
                                    data-feather="heart"></i><span>Contact Queries</span></a>
                        </li>
                        <li class="dropdown"><a class="nav-link menu-title link-nav" href="bookmark.html"><i
                                    data-feather="heart"></i><span>Site Settings</span></a>
                        </li>


                        <li class="dropdown"><a class="nav-link menu-title" href="#"><i
                                    class="fa fa-user"></i><span>Dishes managment</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="create-dishes.php">Create Dishes</a></li>
                                <li><a href="manage-dishes.php">Manage Dishes</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a class="nav-link menu-title" href="#"><i
                                    class="fa fa-user"></i><span>Equipments managment</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="create-equipments.php">Create Equipments</a></li>
                                <li><a href="manage-equipments.php">Manage Equipments</a></li>
                            </ul>
                        </li>


                        <li class=""><a class="nav-link menu-title" href="#"><i
                                    class="fa fa-list-ul"></i><span>Equipments</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="create-equipments.php">Create Equipments</a></li>
                                <li><a href="manage-equipments.php">Manage Equipments</a></li>
                            </ul>
                        </li>

                        <li class="dropdown"><a class="nav-link menu-title" href="#"><i
                                    class="fa fa-user"></i><span>Events managment</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="create-events.php">Create Events</a></li>
                                <li><a href="manage-events.php">Manage Events

                            </ul>
                        </li>

                        <li class="dropdown"><a class="nav-link menu-title" href="#"><i
                                    class="fa fa-user"></i><span>Labour staff managment</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="create-failed_jobs.php">Create Labour staff</a></li>
                                <li><a href="manage-failed_jobs.php">Manage Labour staff</a></li>

                            </ul>
                        </li>
                        <li class="dropdown"><a class="nav-link menu-title" href="#"><i
                                    class="fa fa-user"></i><span>Packages managment</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="create-failed_jobs.php">Create Packages</a></li>
                                <li><a href="manage-failed_jobs.php">Manage Packages</a></li>

                            </ul>
                        </li>


                        <li class="dropdown"><a class="nav-link menu-title" href="#"><i
                                    class="fa fa-user"></i><span>Categories managment</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="create-failed_jobs.php">Create Categories</a></li>
                                <li><a href="manage-failed_jobs.php">Manage Categories</a></li>

                            </ul>
                        </li>

                        <li class="dropdown"><a class="nav-link menu-title" href="#"><i
                                    class="fa fa-user"></i><span>Packages Categories managment</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="create-failed_jobs.php">Create Packages Categories</a></li>
                                <li><a href="manage-failed_jobs.php">Manage Packages Categories</a></li>

                            </ul>
                        </li>




                        <li class="dropdown"><a class="nav-link menu-title" href="#"><i
                                    class="fa fa-user"></i><span>Users managment</span></a>
                            <ul class="nav-submenu menu-content">
                                <li><a href="create-failed_jobs.php">Create Users</a></li>
                                <li><a href="manage-failed_jobs.php">Manage Users</a></li>

                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Page Sidebar Ends-->
