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

        <div class="card">
          <div class="card-header d-flex">
            <!-- <h5 class="card-title">Home Slider</h5> -->
            {{-- <a href="{{route('contacts.add')}}" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto add">
              <span class="fa fa-plus text-white"><b> ADD  </b></span>
            </a> --}}
          </div>
          <div class="card-body">  
            <!-- Table with stripped rows -->
            <div class="table-responsive">
              <table class="table table1" id="example">
                <thead>
                  <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($contactus as $key => $contact)
                    <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$contact->first_name}}</td>
                      <td>{{$contact->email}}</td>
                      <td>
                        @if($contact->status=='read')
									<span class="badge rounded-pill bg-success mt-1">Read</span>
									@elseif($contact->status=='unread')
									<span class="badge rounded-pill bg-danger mt-1">Un-read</span>
									@endif</td>
                      <td>
                        <div class=" justify-content-center">
                          <a href="{{route('contact.show', $contact->id)}}" class=""><i class="bi bi-eye-fill"></i></a>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>  
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

  </main><!-- End #main -->

  @include('Admin.include.footer')
@include('Admin.include.script')