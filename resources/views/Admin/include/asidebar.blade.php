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
            {{-- <li class="nav-item">
               <a href="{{route('offers.index')}}" class="{{ (request()->segment(2) == 'offers') ? 'active' : '' }}">
               <i class="bi bi-circle"></i><span>Offers</span>
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
         </ul>
      </li>
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
        <li class="nav-item">
           <a href="{{route('offers.index')}}" class="{{ (request()->segment(2) == 'offers') ? 'active' : '' }}">
            <i class="bi bi-circle"></i><span>Services</span>
         </a>
      </li>
         </ul>
      </li>
     
      <li class="nav-item">
         <a class="nav-link collapsed" href="{{url('admin/submitted/edit/')}}"> 
         <i class="bi bi-gear-fill"></i><span>General Settings</span>
         </a>
      </li>

     
   </ul>
</aside>
<!-- End Sidebar-->