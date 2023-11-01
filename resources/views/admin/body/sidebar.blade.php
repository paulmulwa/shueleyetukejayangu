<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
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

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#type" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Property Type</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="type">
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
{{-- //////////////////////////////STATE///////////// --}}



    {{-- @if(Auth::user()->can('property.state')) --}}

<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#state" role="button" aria-expanded="false"
        aria-controls="state">
        <i class="link-icon" data-feather="mail"></i>
        <span class="link-title">Property State</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="state">
        <ul class="nav sub-menu">
            {{-- @if(Auth::user()->can('all.state')) --}}
            <li class="nav-item">
                <a href="{{ route('all.state') }}" class="nav-link">All State</a>
            </li>
            {{-- @endif
            @if(Auth::user()->can('add.state')) --}}

            <li class="nav-item">
                <a href="{{ route('add.state') }}" class="nav-link">Add State</a>
            </li>
            {{-- @endif --}}
        </ul>
    </div>
</li>
{{-- @endif --}}

{{-- ///////////////////////////////////////// testimonial --}}




{{-- @if(Auth::user()->can('testimonials.all')) --}}
<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#testimonials" role="button" aria-expanded="false"
        aria-controls="state">
        <i class="link-icon" data-feather="mail"></i>
        <span class="link-title">Manage Testimonial</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="testimonials">
        <ul class="nav sub-menu">
            {{-- @if(Auth::user()->can('testimonials.all')) --}}

            <li class="nav-item">
                <a href="{{ route('all.testimonials') }}" class="nav-link">All Testimonial </a>
            </li>
            {{-- @endif --}}
            {{-- @if(Auth::user()->can('testimonials.add')) --}}

            <li class="nav-item">
                <a href="{{ route('add.testimonials') }}" class="nav-link">Add Testimonial</a>
            </li>
{{-- @endif --}}


        </ul>
    </div>
</li>

{{-- @endif --}}
{{-- @if(Auth::user()->can('category.menu')) --}}

<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#category" role="button" aria-expanded="false"
        aria-controls="state">
        <i class="link-icon" data-feather="mail"></i>
        <span class="link-title">Blog Category</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="category">
        <ul class="nav sub-menu">
            {{-- @if(Auth::user()->can('category.menu')) --}}

            <li class="nav-item">
                <a href="{{ route('all.blog.category') }}" class="nav-link">All categories </a>
            </li>
            {{-- @endif --}}
        </ul>
    </div>
</li>
{{-- @endif --}}
{{-- //////////////////////////////POSTS//////////////////////////////////////////// --}}
{{-- @if(Auth::user()->can('posts.menu')) --}}
<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#posts" role="button" aria-expanded="false"
        aria-controls="state">
        <i class="link-icon" data-feather="mail"></i>
        <span class="link-title">Posts</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="posts">
        <ul class="nav sub-menu">
            {{-- @if(Auth::user()->can('all.posts')) --}}
            <li class="nav-item">
                <a href="{{ route('all.post') }}" class="nav-link">All Posts</a>
            </li>
            {{-- @endif --}}
            {{-- @if(Auth::user()->can('add.posts')) --}}
            <li class="nav-item">
                <a href="{{ route('add.post') }}" class="nav-link">Add Posts </a>
            </li>
            {{-- @endif --}}
        </ul>
    </div>
</li>
{{-- @endif --}}













{{-- /////////////////////////////////////////testimonial --}}









{{-- ///////////////end state.//////////// --}}












{{-- @if(Auth::user()->can('amenities.menu')) --}}
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#amenitie" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Amenitie</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="amenitie">
                    <ul class="nav sub-menu">
                        {{-- @if(Auth::user()->can('all.amenities')) --}}

                        <li class="nav-item">
                            <a href="{{ route('all.amenities') }}" class="nav-link">All Amenities</a>
                        </li>
                        {{-- @endif
                         @if(Auth::user()->can('add.amenities')) --}}

                        <li class="nav-item">
                            <a href="{{ route('add.amenities') }}" class="nav-link">Add Amenities</a>
                        </li>
                        {{-- @endif --}}


                    </ul>
                </div>
            </li>

{{-- @endif --}}
{{-- @if(Auth::user()->can('property.menu')) --}}
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#property" role="button" aria-expanded="false"
                    aria-controls="emails">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Property</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="property">
                    <ul class="nav sub-menu">
                        {{-- @if(Auth::user()->can('property.all')) --}}
                        <li class="nav-item">
                            <a href="{{ route('all.property') }}" class="nav-link">All Properties</a>
                        </li>
                        {{-- @endif
                        @if(Auth::user()->can('property.add')) --}}
                        <li class="nav-item">
                            <a href="{{ route('add.property') }}" class="nav-link">Add Property</a>
                        </li>
{{-- @endif --}}
                    </ul>
                </div>
            </li>
{{-- @endif --}}
            <li class="nav-item nav-category">Role & Permission</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button"
                    aria-expanded="false" aria-controls="advancedUI">
                    <i class="link-icon" data-feather="anchor"></i>
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

            <li class="nav-item nav-category">Manage Admin User</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#admin" role="button"
                    aria-expanded="false" aria-controls="admin">
                    <i class="link-icon" data-feather="anchor"></i>
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




            <li class="nav-item">
                <a href="{{ route('admin.blog.comment') }}" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
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

                <div class="collapse" id="uiComponents">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/ui-components/accordion.html" class="nav-link">Accordion</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/ui-components/alerts.html" class="nav-link">Alerts</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/ui-components/badges.html" class="nav-link">Badges</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/ui-components/breadcrumbs.html" class="nav-link">Breadcrumbs</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/ui-components/tooltips.html" class="nav-link">Tooltips</a>
                        </li>
                    </ul>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button"
                    aria-expanded="false" aria-controls="general-pages">
                    <i class="link-icon" data-feather="book"></i>
                    <span class="link-title">Special pages</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="general-pages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ asset('pages/general/blank-page.html" class="nav-link') }}">Blank page</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('pages/general/faq.html" class="nav-link') }}">Faq</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('pages/general/invoice.html" class="nav-link') }}">Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('pages/general/profile.html" class="nav-link') }}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('pages/general/pricing.html" class="nav-link') }}">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('pages/general/timeline.html" class="nav-link') }}">Timeline</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="" role="button"
                    aria-expanded="false" aria-controls="authPages">
                    <i class="link-icon" data-feather="unlock"></i>
                    <span class="link-title">Blog Comments</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="authPages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/auth/login.html" class="nav-link')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/auth/register.html" class="nav-link')}}">Register</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button"
                    aria-expanded="false" aria-controls="errorPages">
                    <i class="link-icon" data-feather="cloud-off"></i>
                    <span class="link-title">Error</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="errorPages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/error/404.html" class="nav-link')}}">404</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/error/500.html" class="nav-link')}}">500</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Docs</li>
            <li class="nav-item">
                <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <div class="theme-wrapper">
            <h6 class="text-muted mb-2">Light Theme:</h6>
            <a class="theme-item" href="../demo1/dashboard.html">
                <img src="{{ asset('../assets/images/screenshots/light.jpg') }}" alt="light theme">
            </a>
            <h6 class="text-muted mb-2">Dark Theme:</h6>
            <a class="theme-item active" href="../demo2/dashboard.html">
                <img src="{{ asset('../assets/images/screenshots/dark.jpg') }}" alt="light theme">
            </a>
        </div>
    </div>
</nav>
