<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
            <!--begin::Aside Toolbarl-->
            <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
                <!--begin::User-->
                <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px">
                        <img src="{{image_url('avatar.png')}}" alt="" />
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Wrapper-->
                    <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                        <!--begin::Section-->
                        <div class="d-flex">
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-2">
                                <!--begin::Username-->
                                <a href="#" class="text-white text-hover-primary fs-6 fw-bold">{{ ucwords(auth()->user()->name) }}</a>
                                <!--end::Username-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center text-success fs-9">
                                    <span class="bullet bullet-dot bg-success me-1"></span>online</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::User-->
                <!--begin::Aside search-->
                <div class="aside-search py-5">
                    <!--begin::Search-->
                    <div id="kt_header_search" class="d-flex align-items-center" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start" data-kt-menu-flip="bottom">
                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden" />
                            <!--end::Hidden input-->
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-2 search-icon position-absolute top-50 translate-middle-y ms-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
											<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
										</svg>
									</span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Input-->
                            <input type="text" class="form-control ps-13 fs-7 h-40px" name="search" value="" placeholder="Quick Search" data-kt-search-element="input" />
                            <!--end::Input-->

                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Aside search-->
                <!--end::Aside users-->
            </div>
            <!--end::Aside Toolbarl-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item">
                            <div class="menu-content pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Main Menu</span>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{route('dashboard.index')}}">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                        <i class="fa fa-home "></i>
                                    </span>
                                </span>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </div>

                        @if(in_array(auth()->user()->role,array('admin')))

                        <div class="menu-item">
                            <div class="menu-content pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Administrative </span>
                            </div>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{route('admin.index')}}">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                         <i class="fa fa-user"></i>
                                    </span>
                                </span>
                                <span class="menu-title">Administrative</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{route('admin.create')}}">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                         <i class="fa fa-plus"></i>
                                    </span>
                                </span>
                                <span class="menu-title">Create Administrative</span>
                            </a>
                        </div>


                        <div class="menu-item">
                            <div class="menu-content pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Department </span>
                            </div>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{route('department.index')}}">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                         <i class="fa fa-paint-brush"></i>
                                    </span>
                                </span>
                                <span class="menu-title">All Departments</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{route('department.create')}}">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                         <i class="fa fa-plus"></i>
                                    </span>
                                </span>
                                <span class="menu-title">Create Department</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <div class="menu-content pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Students</span>
                            </div>
                        </div>

                            <div class="menu-item">
                                <a class="menu-link" href="{{route('student.create')}}">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                         <i class="fa fa-plus"></i>
                                    </span>
                                </span>
                                    <span class="menu-title">Create Student</span>
                                </a>
                            </div>

                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa fa-user-circle "></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">All FPE Students</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion" style="display: none; overflow: hidden;" kt-hidden-height="312">

                                    @foreach(\App\Department::orderBy('name')->get() as $value)

                                    <div class="menu-item">
                                        <a class="menu-link" href="{{route('student.show',$value->id)}}">
                                        <span class="menu-icon">
                                            <span class="svg-icon svg-icon-2">
                                                 <i class="fa fa-circle-notch"></i>
                                            </span>
                                        </span>
                                            <span class="menu-title">{{ ucwords($value->name) }}</span>
                                        </a>
                                    </div>

                                    @endforeach

                                </div>
                            </div>


                        @endif

                        <div class="menu-item">
                            <div class="menu-content pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Posts</span>
                            </div>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{route('post.create')}}">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                         <i class="fa fa-plus"></i>
                                    </span>
                                </span>
                                <span class="menu-title">Create Post</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{route('post.index')}}">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                         <i class="fa fa-plus"></i>
                                    </span>
                                </span>
                                <span class="menu-title">All Posts</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <div class="menu-content pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Contestant</span>
                            </div>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{route('contestant.create')}}">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                         <i class="fa fa-plus"></i>
                                    </span>
                                </span>
                                <span class="menu-title">Create Contestant</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{route('contestant.index')}}">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                         <i class="fa fa-plus"></i>
                                    </span>
                                </span>
                                <span class="menu-title">All FPE Contestant</span>
                            </a>
                        </div>


                        <div class="menu-item">
                            <a class="menu-link" href="{{route('result.index')}}">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                         <i class="fa fa-file-export"></i>
                                    </span>
                                </span>
                                <span class="menu-title">FPE Election Result</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{route('settings.index')}}">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                         <i class="fa fa-file-export"></i>
                                    </span>
                                </span>
                                <span class="menu-title">Settings</span>
                            </a>
                        </div>

                        <div class="menu-item">
                            <a class="menu-link" href="{{url('panel/logout')}}" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon">
                                    <span class="svg-icon svg-icon-2">
                                        <i class="fa fa-sign-out text-danger "></i>
                                    </span>
                                </span>
                                <span class="menu-title">Logout</span>
                            </a>
                        </div>

                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside menu-->

        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" style="" class="header align-items-stretch">
                <!--begin::Brand-->

                <!--begin::Brand-->
                <div class="header-brand">
                    <!--begin::Logo-->
                    <a href="{{url(route('dashboard.index'))}}">
                        <img alt="{{ config('app.name') }}" src="{{image_url('logo.png')}}" style="width: 100%; height: 50px;" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Aside minimize-->
                    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr092.svg-->
                        <span class="svg-icon svg-icon-1 me-n1 minimize-default">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.3" x="8.5" y="11" width="12" height="2" rx="1" fill="black" />
										<path d="M10.3687 11.6927L12.1244 10.2297C12.5946 9.83785 12.6268 9.12683 12.194 8.69401C11.8043 8.3043 11.1784 8.28591 10.7664 8.65206L7.84084 11.2526C7.39332 11.6504 7.39332 12.3496 7.84084 12.7474L10.7664 15.3479C11.1784 15.7141 11.8043 15.6957 12.194 15.306C12.6268 14.8732 12.5946 14.1621 12.1244 13.7703L10.3687 12.3073C10.1768 12.1474 10.1768 11.8526 10.3687 11.6927Z" fill="black" />
										<path opacity="0.5" d="M16 5V6C16 6.55228 15.5523 7 15 7C14.4477 7 14 6.55228 14 6C14 5.44772 13.5523 5 13 5H6C5.44771 5 5 5.44772 5 6V18C5 18.5523 5.44771 19 6 19H13C13.5523 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18V19C16 20.1046 15.1046 21 14 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H14C15.1046 3 16 3.89543 16 5Z" fill="black" />
									</svg>
								</span>
                        <!--end::Svg Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
                        <span class="svg-icon svg-icon-1 minimize-active">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="black" />
										<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="black" />
										<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
									</svg>
								</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Aside minimize-->
                    <!--begin::Aside toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                        <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Aside toggle-->
                </div>
                <!--end::Brand-->
                <div class="toolbar">
                    <!--begin::Toolbar-->
                    <div class="container-fluid py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column me-5">
                            <!--begin::Title-->
                            <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">Dashboard</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="{{route('dashboard.index')}}" class="text-muted text-hover-primary">Home</a>
                                </li>

                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-dark">{{ $page_title }}</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Action group-->
                        <div class="d-flex align-items-stretch overflow-auto pt-3 pt-lg-0">
                            <!--begin::Action wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Label-->
                                <span class="fs-7 text-gray-700 fw-bolder pe-3 d-none d-xxl-block">{{ ucwords(auth()->user()->role) }}</span>
                                <!--end::Label-->
                                <!--end::Actions-->
                            </div>
                            <!--end::Action wrapper-->
                            <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <img src="{{image_url('avatar.png')}}" alt="user" />
                                </div>
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="{{image_url('avatar.png')}}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bolder d-flex align-items-center fs-5">{{ ucwords(auth()->user()->name) }}
                                                </div>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="{{route('admin.edit',auth()->id())}}" class="menu-link px-5">Update Profile</a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="{{url('panel.logout')}}" class="menu-link px-5">Logout</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--end::Header-->



