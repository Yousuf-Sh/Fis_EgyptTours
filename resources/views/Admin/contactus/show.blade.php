@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')


  <main id="main" class="main" >
  <div class="pagetitle">
      <h1>Contact Us</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Contact Us</li>
          <li class="breadcrumb-item active">Manage Contact Us</li>
        </ol>
      </nav>
    </div>
    @if(session('success'))
      <div id="success-message" class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center mb-4">
          <img src="{{asset('Frontend/images/logo.png')}}" alt="Website Logo" class="logo">
      </div>

      <div class="card">
          <div class="card-header">
              <h4 class="mb-0">Contact Form Submission</h4>
          </div>
          <div class="card-body">
              <p class="mb-2"><strong>First Name:</strong> {{$contactus->first_name }}</p>
              <p class="mb-2"><strong>Last Name:</strong> {{ $contactus->last_name }}</p>
              <p class="mb-2"><strong>Email:</strong> {{ $contactus->email }}</p>
              <p class="mb-2"><strong>Phone:</strong> {{ $contactus->phone_number ?? 'N/A' }}</p>
              
              <hr>
                  <h4 class="mt-3">Message:</h4>
                  <div class="alert alert-secondary">
                      {{ $contactus->user_message }}
                  </div>
            
              
          </div>
          <div class="card-footer text-muted text-center">
              Received: {{ now()->format('F d, Y H:i A') }}
          </div>
      </div>

      

      </div>
    </div>
  </section>

  </main><!-- End #main -->

  @include('Admin.include.footer')
@include('Admin.include.script')