<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Rubick admin is super flexible, powerful, clean & modern responsive bootstrap admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Rubick Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        @stack('niceSelect2CSS')
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Admin Dashboard</title>
        {{-- PAGINATION  --}}
        @stack('pagination')
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}"/>
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu d-md-none">
            <div class="mobile-menu-bar">
                <a href="index.html" class="d-flex me-auto">
                    <img alt="Rubick Bootstrap HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                </a>
                <a href="javascript:;" id="mobile-menu-toggler" class="mobile-menu-bar__toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white"></i> </a>
            </div>
            <ul class="mobile-menu-wrapper border-top border-theme-29 dark-border-dark-3 py-5">
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'menu menu--active' : '' }}">
                        <div class="menu__icon"> <i data-feather="home"></i> </div>
                        <div class="menu__title"> Dashboard <i data-feather="chevron-down" class="menu__sub-icon menu__sub-icon--active"></i> </div>
                    </a>
                    <ul class="menu__sub-open">
                        <li>
                            <a href="{{ route('general.report') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Transaction </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.approve') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Approve </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('insert.blance') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Insert Balance </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('update.blance') }}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Update Balance </div>
                            </a>
                        </li>
                    </ul>
                </li>

                @hasanyrole('admin')

                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> Previous Qsn  <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('add.subject') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Add Subject </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('subject.list') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Subject List </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('question.insert') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Insert Qsn </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('question.details.list') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Previous Qsn </div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> Attendance  <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('add.new.batch') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Add New Batch </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admit.student') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Admit Student </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('present.students') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Attendance </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('all.attendance.record') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Check Attendance </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('attendance.record.check') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Check by Date </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('attendance.pdf') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> PDF Attendance </div>
                            </a>
                        </li>
                        
                    </ul>
                </li>


                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> Blog's  <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('category.insert') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Add New Category </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('subcategory.insert') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Blog Details </div>
                            </a>
                        </li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> Teacher's  <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('faculty.insert') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Add New Teacher </div>
                            </a>
                        </li>

                        
                    </ul>
                </li>


                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-feather="box"></i> </div>
                        <div class="menu__title"> club  <i data-feather="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('club.insert') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> Add New club </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('club.list') }}" class="menu menu--active">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> club list </div>
                            </a>
                        </li>

                        
                    </ul>
                </li>

      
                @endhasanyrole



                <li>
                    <a href="side-menu-light-inbox.html" class="menu">
                        <div class="menu__icon"> <i data-feather="inbox"></i> </div>
                        <div class="menu__title"> Inbox </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-manager.html" class="menu">
                        <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
                        <div class="menu__title"> File Manager </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-point-of-sale.html" class="menu">
                        <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
                        <div class="menu__title"> Point of Sale </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="d-flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="index.html" class="intro-x d-flex align-items-center ps-5 pt-4">
                    <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                    <span class="d-none d-xl-block text-white fs-lg ms-3"> Ru<span class="fw-medium">bick</span> </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'side-menu--active side-menu--open' : '' }} side-menu">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open">
                            <li>
                                <a href="{{ route('general.report') }}" class="side-menu side-menu--active side-menu--open">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Transaction </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.approve') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Approve </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('insert.blance') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Insert Balance </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('update.blance') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Update Balance </div>
                                </a>
                            </li>
                        </ul>
                    </li>


                    @hasanyrole('admin')


                    <li>
                        <a href="javascript:;.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title">
                                Previous Qsn 
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('add.subject') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Add Subject </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('subject.list') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Subject List </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('question.insert') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Insert Qsn </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('question.details.list') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Previous Qsn </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                {{-- ATTENDANCE START  --}}
                    <li>
                        <a href="javascript:;.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title">
                                Attendance
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('add.new.batch') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Add New Batch</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admit.student') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Admit Student</div>
                                </a>
                            </li>
                        <li>
                                <a href="{{ route('present.students') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Attendance </div>
                                </a>
                            </li>
                        <li>
                                <a href="{{ route('all.attendance.record') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Check Attendance </div>
                                </a>
                            </li>
                        <li>
                                <a href="{{ route('attendance.record.check') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Check by Date </div>
                                </a>
                            </li>

                        <li>
                                <a href="{{ route('attendance.pdf') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> PDF Attendance </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title">
                                Blog's
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('category.insert') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Add New Category</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('subcategory.insert') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">Blog Details</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title">
                                Teacher's
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('faculty.insert') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Add New Teacher</div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title">
                                Club
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('club.insert') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Add New Club</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('club.list') }}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> club list</div>
                                </a>
                            </li>

                        </ul>
                    </li>


                {{-- ATTENDANCE END  --}}

                    @endhasanyrole

                    <li>
                        <a href="side-menu-light-inbox.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="inbox"></i> </div>
                            <div class="side-menu__title"> Inbox </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-file-manager.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="hard-drive"></i> </div>
                            <div class="side-menu__title"> File Manager </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-point-of-sale.html" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                            <div class="side-menu__title"> Point of Sale </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb me-auto d-none d-sm-flex"> <a href="index.html">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="{{ route('home') }}" class="breadcrumb--active">Dashboard</a> </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x position-relative me-3 me-sm-6">
                        
                        {{-- ** SEARCH MESSING PICH*** --}}
                        @stack('search')

                        <a class="notification d-sm-none" href="index.html"> <i data-feather="search" class="notification__icon dark-text-gray-300"></i> </a>

                    </div>
                    <!-- END: Search -->
                    <!-- BEGIN: Notifications -->
                    <div class="intro-x dropdown me-auto me-sm-6">
                        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-bs-toggle="dropdown"> <i data-feather="bell" class="notification__icon dark-text-gray-300"></i> </div>
                        <div class="notification-content pt-2 dropdown-menu">
                            <div class="notification-content__box dropdown-content">
                                <div class="notification-content__title dark-text-gray-300">Notifications</div>

                                <div class="cursor-pointer position-relative d-flex align-items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit me-1">
                                        <img alt="Rubick Bootstrap HTML Admin Template" class="rounded-pill" src="{{ asset('dist/images/profile-3.jpg') }}">
                                        <div class="w-3 h-3 bg-theme-9 position-absolute end-0 bottom-0 rounded-pill border-2 border-white dark-border-dark-3"></div>
                                    </div>
                                    <div class="ms-2 overflow-hidden">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:;" class="fw-medium truncate me-5 dark-text-gray-300">Angelina Jolie</a> 
                                            <div class="fs-xs text-gray-500 ms-auto text-nowrap">06:05 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600 mt-0.5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div class="dropdown-toggle w-8 h-8 rounded-pill overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                            <img
                                src="https://api.dicebear.com/6.x/initials/svg?seed={{ Auth::user()->name; }}"
                                alt="avatar"/>
                        </div>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content bg-theme-26 dark-bg-dark-6 text-white">
                                <li class="p-2">
                                    <div class="fw-medium text-white"></div>
                                    <div class="fs-xs text-theme-28 mt-0.5 dark-text-gray-600">{{ Auth::user()->name; }}</div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider border-theme-27 dark-border-dark-3">
                                </li>
                                <li>
                                    <a href="index.html" class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i data-feather="user" class="w-4 h-4 me-2"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="index.html" class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i data-feather="edit" class="w-4 h-4 me-2"></i> Add Account </a>
                                </li>
                                <li>
                                    <a href="index.html" class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i data-feather="lock" class="w-4 h-4 me-2"></i> Reset Password </a>
                                </li>
                                <li>
                                    <a href="index.html" class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover"> <i data-feather="help-circle" class="w-4 h-4 me-2"></i> Help </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider border-theme-27 dark-border-dark-3">
                                </li>
                                <li>
                                        <a class="dropdown-item text-white bg-theme-1-hover dark-bg-dark-3-hover" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->

             

               {{-- GENERAL REPORT --}}
               @yield('general-report')

               {{-- REPORT TABLE --}}
               @yield('report-table')

            </div>
            
            <!-- END: Content -->
        </div>

        <!-- BEGIN: JS Assets-->
        
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG7gNHAhDzgYmq4-EHvM4bqW1DNj2UCuk&libraries=places"></script>
        {{-- CKEDITOR  --}}
          @stack('ckeditor')
          @stack('ajax')
          @stack('niceSelect2')
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
          @stack('sweetAleart2')
        <script src="{{ asset('dist/js/app.js') }}"></script>

        <!-- END: JS Assets-->
    </body>
</html>
