<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ url('/') }}" class="sidebar-brand">
        Keja<span>Yangu</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title"> Dashboard</span>

                </a>
            </li>
            <li class="nav-item nav-category">Real Estate</li>

{{-- //////////////////////////////STATE///////////// --}}

 <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#property" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="edit"></i>
                    <span class="link-title">Property</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="property">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.property') }}" class="nav-link">All Properties</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('add.property') }}" class="nav-link">Add Property</a>
                        </li>
                    </ul>
                </div>
            </li>


  <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="plus-square"></i>
                    <span class="link-title">Property Type</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                    <ul class="nav sub-menu">

                        <li class="nav-item">
                            <a href="{{ route('all.type') }}" class="nav-link">All Type</a>
                        </li>


                       <li class="nav-item">
                           <a href="{{ route('add.type') }}" class="nav-link">Add Type</a>
                       </li>


                    </ul>
                </div>
            </li>










<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#state" role="button" aria-expanded="false"
        aria-controls="state">
        <i class="link-icon" data-feather="briefcase"></i>
        <span class="link-title">Property Location</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="state">
        <ul class="nav sub-menu">
            <li class="nav-item">
                <a href="{{ route('all.state') }}" class="nav-link">All Counties</a>
            </li>


            <li class="nav-item">
                <a href="{{ route('add.state') }}" class="nav-link">Add County</a>
            </li>
        </ul>
    </div>
</li>

{{-- ///////////////////////////////////////// testimonial --}}




<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#testimonials" role="button" aria-expanded="false"
        aria-controls="state">
        <i class="link-icon" data-feather="align-justify"></i>
        <span class="link-title">Manage Testimonial</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="testimonials">
        <ul class="nav sub-menu">

            <li class="nav-item">
                <a href="{{ route('all.testimonials') }}" class="nav-link">All Testimonial </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('add.testimonials') }}" class="nav-link">Add Testimonial</a>
            </li>


        </ul>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#category" role="button" aria-expanded="false"
        aria-controls="state">
        <i class="link-icon" data-feather="archive"></i>
        <span class="link-title">Blog Category</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="category">
        <ul class="nav sub-menu">

            <li class="nav-item">
                <a href="{{ route('all.blog.category') }}" class="nav-link">All categories </a>
            </li>
        </ul>
    </div>
</li>
{{-- //////////////////////////////POSTS//////////////////////////////////////////// --}}
<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#posts" role="button" aria-expanded="false"
        aria-controls="state">
        <i class="link-icon" data-feather="calendar"></i>
        <span class="link-title">Blog Posts</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="posts">
        <ul class="nav sub-menu">
            <li class="nav-item">
                <a href="{{ route('all.post') }}" class="nav-link">All Posts</a>
            </li>

            <li class="nav-item">
                <a href="{{ route('add.post') }}" class="nav-link">Add Posts </a>
            </li>
        </ul>
    </div>
</li>













{{-- /////////////////////////////////////////testimonial --}}









{{-- ///////////////end state.//////////// --}}












            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#amenitie" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="slack"></i>
                    <span class="link-title">Amenitie</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="amenitie">
                    <ul class="nav sub-menu">

                        <li class="nav-item">
                            <a href="{{ route('all.amenities') }}" class="nav-link">All Amenities</a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('add.amenities') }}" class="nav-link">Add Amenities</a>
                        </li>


                    </ul>
                </div>
            </li>



            <li class="nav-item nav-category">Role & Permission</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button"
                    aria-expanded="false" aria-controls="advancedUI">
                    <i class="link-icon" data-feather="folder-plus"></i>
                    <span class="link-title">Role & Permission</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="advancedUI">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.permission') }}" class="nav-link">All Permission</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('all.roles') }}" class="nav-link">All Roles</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.roles.permission') }}" class="nav-link">Add Roles and Permission</a>
                        </li>
                         <li class="nav-item">
                            <a href="{{ route('all.roles.permission') }}" class="nav-link">All Roles and Permission</a>
                        </li>


                    </ul>
                </div>
            </li>




            <li class="nav-item nav-category">Edit Website page</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#contact" role="button"
                    aria-expanded="false" aria-controls="advancedUI">
                    <i class="link-icon" data-feather="edit"></i>
                    <span class="link-title">Edit Website </span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="contact">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('contacts.admincontacts') }}" class="nav-link">Contacts Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.user.message') }}" class="nav-link">User Messages</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('banner.all.banner') }}" class="nav-link">Edit Courasel</a>
                        </li>

                                        </ul>
                                    </div>

            </li>




            <li class="nav-item nav-category">About Us</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#aboutus" role="button"
                    aria-expanded="false" aria-controls="aboutus">
                    <i class="link-icon" data-feather="layout"></i>
                    <span class="link-title">About Us</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="aboutus">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('aboutus.all_aboutus') }}" class="nav-link">All Aboutus</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('aboutus.all_services') }}" class="nav-link">All Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('aboutus.add_services') }}" class="nav-link">Add Services</a>
                        </li>
                    </ul>
                </div>
            </li>




















            <li class="nav-item nav-category">Manage Admin User</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#admin" role="button"
                    aria-expanded="false" aria-controls="admin">
                    <i class="link-icon" data-feather="pocket"></i>
                    <span class="link-title">Manage Admin</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="admin">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('all.admin') }}" class="nav-link">All Admin</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('add.roles.permission') }}" class="nav-link">Add Admin</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.package.history') }}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Property History</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a href="{{ route('admin.package.history') }}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Property History</span>
                </a>
            </li> --}}




            <li class="nav-item">
                <a href="{{ route('admin.blog.comment') }}" class="nav-link">
                    <i class="link-icon" data-feather="sidebar"></i>
                    <span class="link-title">All Comments</span>
                </a>
            </li>




            <li class="nav-item">
                <a href="{{ route('smtp.setting') }}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Smtp Setting</span>
                </a>
            </li>



<li class="nav-item">
                <a href="{{ route('site.setting') }}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Site Setting</span>
                </a>
            </li>











            <li class="nav-item nav-category">User All Function</li>
            <li class="nav-item">




                <li class="nav-item nav-category">Manage Agents</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false"
                        aria-controls="uiComponents">
                        <i class="link-icon" data-feather="feather"></i>
                        <span class="link-title">Manage Agent</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="uiComponents">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ route('all.agent')}}" class="nav-link">All Agent</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('add.agent') }}" class="nav-link">Add Agent</a>
                            </li>


                        </ul>
                    </div>
                </li>
        </ul>
    </div>
</nav>
