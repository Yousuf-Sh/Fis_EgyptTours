<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/admin/dashboard') }}">
                <i class="bi bi-house-door-fill"></i><span>Dashboard</span>
            </a>
        </li>

        <!-- Management Section -->
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'cms' || request()->segment(2) == 'slider' || request()->segment(2) == 'contact' || request()->segment(2) == 'partners' || request()->segment(2) == 'faq' || request()->segment(2) == 'testimonials'|| request()->segment(2) == 'languages' || request()->segment(2) == 'blogs') ? '' : 'collapsed' }}" data-bs-toggle="collapse" data-bs-target="#management-nav" aria-expanded="false" aria-controls="management-nav">
                <i class="bi bi-collection-fill"></i><span>Management</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="management-nav" class="nav-content {{ (request()->segment(2) == 'management') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('/admin/blogs') }}" class="{{ (request()->segment(2) == 'blogs') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Blog</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/cms') }}" class="{{ (request()->segment(2) == 'cms') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>CMS Pages</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/contact') }}" class="{{ (request()->segment(2) == 'contact') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Contact Submissions</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/faq') }}" class="{{ (request()->segment(2) == 'faq') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>FAQs</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/admin/languages') }}" class="{{ (request()->segment(2) == 'language') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Languages</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/partners') }}" class="{{ (request()->segment(2) == 'partners') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Partners</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/slider') }}" class="{{ (request()->segment(2) == 'slider') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Slider</span>
                    </a>
                </li>
               
                <li>
                    <a href="{{ url('/admin/testimonials') }}" class="{{ (request()->segment(2) == 'testimonials') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Testimonials</span>
                    </a>
                </li>
                
            </ul>
        </li>

        <!-- Services Section -->
        <li class="nav-item">
            <a class="nav-link {{ (request()->segment(2) == 'Submissions') ? '' : 'collapsed' }}" data-bs-toggle="collapse" data-bs-target="#services-nav" aria-expanded="false" aria-controls="services-nav">
                <i class="bi bi-inboxes"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="services-nav" class="nav-content {{ (request()->segment(2) == 'Submissions') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('/admin/services/airport') }}" class="{{ (request()->segment(2) == 'airport') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Airport Transfer</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/services') }}" class="{{ (request()->segment(2) == 'services') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Excursions</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/services') }}" class="{{ (request()->segment(2) == 'tour-package') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Tour Package</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/services') }}" class="{{ (request()->segment(2) == 'nile-cruise') ? 'active' : '' }}">
                        <i class="bi bi-circle"></i><span>Nile Cruise</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- General Settings -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('admin/submitted/edit/') }}">
                <i class="bi bi-gear-fill"></i><span>General Settings</span>
            </a>
        </li>
    </ul>
</aside>
<!-- End Sidebar -->
