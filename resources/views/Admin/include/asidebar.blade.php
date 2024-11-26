<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
   <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
         <a class="nav-link collapsed" href="{{url('/admin/dashboard')}}"><i class="bi bi-house-door-fill"></i><span>Dashboard</span>
         </a>
      </li>
      <li class="nav-item">
         
         <ul id="membersarea-nav" class="nav-content  {{ (request()->segment(2) == 'noticeboard' || request()->segment(2) == 'downloads' || request()->segment(2) == 'registered-members')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
           
           
            
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link  {{ (request()->segment(2) == 'management' || request()->segment(2) == 'aboutus'|| request()->segment(2) == 'testimonials'|| request()->segment(2) == 'working'|| request()->segment(2) == 'department-category'|| request()->segment(2) == 'admin/clients'|| request()->segment(2) == 'admin/choose'|| request()->segment(2) == 'setting'|| request()->segment(2) == 'audit'|| request()->segment(2) == 'slider'|| request()->segment(2) == 'faq'|| request()->segment(2) == 'streaming'|| request()->segment(2) == 'footer'|| request()->segment(2) == 'services' )? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#setting-nav" aria-expanded="false" aria-controls="collapse">
         <i class="bi bi-collection-fill"></i><span>Management</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="setting-nav" class="nav-content  {{ (request()->segment(2) == 'management')? ' show' : ''}}" data-bs-parent="#sidebar-nav" >
            
            <li>
               <a href="{{url('admin/cms')}} " class="{{ (request()->segment(2) == 'cms') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>CMS Pages</span>
               </a>
            </li>
           
           
            <li class="nav-item">
               <a href="{{url('admin/slider')}}" class="{{ (request()->segment(2) == 'slider') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Slider</span>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{route('offers.index')}}" class="{{ (request()->segment(2) == 'offers') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Offers</span>
               </a>
            </li>
          
           {{-- <li>
            <a href="{{url('admin/pest')}}" class="{{ (request()->segment(2) == 'department-category') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Pests</span>
            </a> 
          </li> --}}
          {{-- <li>
            <a href="{{url('/admin/vision')}}" class="{{ (request()->segment(2) == 'admin/vision') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Our Work & History</span>
            </a>
         </li> --}}
         {{-- <li>
            <a href="{{url('/admin/about_us')}}" class="{{ (request()->segment(2) == 'admin/about_us') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>About us</span>
            </a>
         </li> --}}
         
         {{-- <li>
            <a href="{{url('/admin/Iot')}}" class="{{ (request()->segment(2) == 'admin/Iot') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>IOT and Technology</span>
            </a>
         </li> --}}
            {{-- <li>
                <a href="{{url('/admin/testimonials')}}" class="{{ (request()->segment(2) == 'testimonials') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Manage Testimonials</span>
                </a>
            </li> --}}
           
           
            {{-- <li>
                <a href="{{url('/admin/projectmangement')}}" class="{{ (request()->segment(2) == 'projectmangement') ? 'active' : '' }}">
                    <i class="bi bi-circle"></i><span>Project Management</span>
                </a>
            </li> --}}
           
            <li>
               <a href="{{url('admin/clients')}}" class="{{ (request()->segment(2) == 'admin/clients') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Partners</span>
               </a>
            </li> 
           
            
            <li>
               <a href="{{url('/admin/faq')}}" class="{{ (request()->segment(2) == 'admin/faq') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>FAQs</span>
               </a>
            </li>
           
            {{-- <li class="nav-item">
               <a href="{{url('admin/streaming')}}" class="{{ (request()->segment(2) == 'streaming') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Streaming</span>
               </a>
            </li>  --}}
            <!-- <li class="nav-item">
               <a href="{{url('admin/footer')}}" class="{{ (request()->segment(2) == 'footer') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Footer</span>
               </a>
            </li> -->
         </ul>
      </li>
      {{-- <li class="nav-item">
         <a class="nav-link  {{ (request()->segment(2) == 'services')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#Services-nav" href="#">
         <i class="bi bi-inboxes"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="Services-nav" class="nav-content  {{ (request()->segment(2) == 'services')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            <li>
               <a href="{{url('admin/services')}}" class="{{ (request()->segment(2) == 'admin/services') ? 'active' : '' }}">
                   <i class="bi bi-circle"></i><span>Manage Services</span>
               </a>
           </li> 
           <li>
            <a href="{{url('admin/servicesmenu')}}" class="{{ (request()->segment(2) == 'admin/servicesmenu') ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Add Services in Menu</span>
            </a>
        </li> 
         </ul>
      </li> --}}
      {{-- <li class="nav-item">
         <a class="nav-link  {{ (request()->segment(2) == 'Submissions')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#submissions-nav" href="#">
         <i class="bi bi-inboxes"></i><span>Submissions</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="submissions-nav" class="nav-content  {{ (request()->segment(2) == 'Submissions')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            <li>
               <a href="{{url('/admin/Newsletter')}}" class="{{ (request()->segment(2) == 'Newsletter') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Newsletter</span>
               </a>
           </li>
           <li>
            <a href="{{url('admin/submitted-contact')}}" class="{{ (request()->segment(2) == 'submitted-contact') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Contact</span>
            </a>
        </li> --}}
        <li class="nav-item">
         <a class="nav-link  {{ (request()->segment(2) == 'Submissions')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#submissions-nav" href="#">
         <i class="bi bi-inboxes"></i><span>Manage Services</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="submissions-nav" class="nav-content  {{ (request()->segment(2) == 'Submissions')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            <li>
               <a href="{{url('admin/services')}}" class="{{ (request()->segment(2) == 'admin/services') ? 'active' : '' }}">
                   <i class="bi bi-circle"></i><span>Airport Transfer</span>
               </a>
           </li> 
           <li>
            <a href="{{url('admin/airservicesdetails')}}" class="{{ (request()->segment(2) == 'admin/services') ? 'active' : '' }}">
                <i class="bi bi-circle"></i><span>Airport Transfer Details</span>
            </a>
        </li> 
         </ul>
      </li>
     
      <li class="nav-item">
         <a class="nav-link collapsed" href="{{url('admin/submitted/edit/')}}"> 
         <i class="bi bi-gear-fill"></i><span>General Settings</span>
         </a>
      </li>
      {{--
      <li class="nav-item">
         <a class="nav-link  {{ (request()->segment(2) == 'service')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#services-nav" href="#">
         <i class="bi bi-people"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="services-nav" class="nav-content  {{ (request()->segment(2) == 'service')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            <li>
               <a href="{{url('admin/services')}}" class="{{ (request()->segment(2) == 'services') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Add and View Services</span>
               </a>
            </li>
            <li>
               <a href="{{url('admin/past-officers')}}" class="{{ (request()->segment(2) == 'past-officers') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Past Officers</span>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{url('admin/committee-category')}}" class="{{ (request()->segment(2) == 'committee-category') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Category</span>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link  {{ (request()->segment(2) == 'admin/pest' || request()->segment(2) == 'department-list')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#Pest-nav" aria-expanded="false" aria-controls="collapse">
         <i class="bi bi-person"></i><span>Pest</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="Pest-nav" class="nav-content  {{ (request()->segment(2) == 'admin/pest' || request()->segment(2) == 'department-list')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            <li>
               <a href="{{url('admin/pest')}}" class="{{ (request()->segment(2) == 'department-category') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Pests</span>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link  {{ (request()->segment(2) == 'department-category' || request()->segment(2) == 'department-list')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#membersmarkets-nav" aria-expanded="false" aria-controls="collapse">
         <i class="bi bi-person"></i><span>Our Clients</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="membersmarkets-nav" class="nav-content  {{ (request()->segment(2) == 'department-category' || request()->segment(2) == 'department-list')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            <li>
               <a href="{{url('admin/clients')}}" class="{{ (request()->segment(2) == 'admin/clients') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Clients</span>
               </a>
            </li>
         </ul>
      </li>
      
      <li class="nav-item">
         <a class="nav-link  {{ (request()->segment(2) == 'Testimonials')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#testimonials-nav" href="#">
         <i class="bi bi-inboxes"></i><span>Testimonials</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="testimonials-nav" class="nav-content  {{ (request()->segment(2) == 'Testimonials')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            <li>
               <a href="{{url('/admin/testimonials')}}" class="{{ (request()->segment(2) == 'testimonials') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Manage Testonomial</span>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link  {{ (request()->segment(2) == 'admin/working' || request()->segment(2) == 'tickets')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#working-nav" href="#">
         <i class="bi bi-inboxes"></i><span>Working</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="working-nav" class="nav-content  {{ (request()->segment(2) == 'admin/working' || request()->segment(2) == 'tickets')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            <li>
               <a href="{{url('/admin/working')}}" class="{{ (request()->segment(2) == 'testimonials') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>How it Works</span>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link  {{ (request()->segment(2) == 'admin/choose' || request()->segment(2) == 'tickets')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#choosing-nav" href="#">
         <i class="bi bi-inboxes"></i><span>Why Choose Us</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="choosing-nav" class="nav-content  {{ (request()->segment(2) == 'admin/choose' || request()->segment(2) == 'tickets')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            <li>
               <a href="{{url('/admin/choose')}}" class="{{ (request()->segment(2) == 'admin/choose') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Reason For Choosing</span>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link  {{ (request()->segment(2) == '/admin/audit' || request()->segment(2) == 'tickets')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#audit-nav" href="#">
         <i class="bi bi-inboxes"></i><span>Audits</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="audit-nav" class="nav-content  {{ (request()->segment(2) == '/admin/audit' || request()->segment(2) == 'tickets')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            <li>
               <a href="{{url('/admin/audit')}}" class="{{ (request()->segment(2) == 'audit') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Audits</span>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link  {{ (request()->segment(2) == '/admin/FAQ' || request()->segment(2) == 'tickets')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#faq-nav" href="#">
         <i class="bi bi-inboxes"></i><span>FAQ</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="faq-nav" class="nav-content  {{ (request()->segment(2) == '/admin/FAQ' || request()->segment(2) == 'tickets')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            <li>
               <a href="{{url('/admin/faq')}}" class="{{ (request()->segment(2) == 'faq') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Frequently Asked Question</span>
               </a>
            </li>
         </ul>
      </li>
      <li class="nav-item">
         <a class="nav-link  {{ (request()->segment(2) == '/admin/setting' || request()->segment(2) == 'tickets')? '' : 'collapsed'}}" data-bs-toggle="collapse" data-bs-target="#settings-nav" href="#">
         <i class="bi bi-inboxes"></i><span>Our Partner</span><i class="bi bi-chevron-down ms-auto"></i>
         </a>
         <ul id="settings-nav" class="nav-content  {{ (request()->segment(2) == '/admin/setting' || request()->segment(2) == 'tickets')? ' show' : 'collapse'}}" data-bs-parent="#sidebar-nav" >
            <li>
               <a href="{{url('/admin/setting')}}" class="{{ (request()->segment(2) == 'setting') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>General Setting Partner</span>
               </a>
            </li>
         </ul>
      </li>--}}
      <!-- End subCategories Page Nav -->
   </ul>
</aside>
<!-- End Sidebar-->