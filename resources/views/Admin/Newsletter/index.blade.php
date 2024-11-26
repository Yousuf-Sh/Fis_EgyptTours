@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
  <main id="main" class="main" style="min-height: 490px;">
    <div class="pagetitle">
      <h1>Contact Us</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">General Settings</li>
          <li class="breadcrumb-item active">Manage Contact Us</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex">
              <!-- <h5 class="card-title">Contact Us</h5> -->
              {{-- <a href="{{route('contact.add')}}" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto add">
                <span class="fa fa-plus text-white "><b> ADD  </b></span>
              </a> --}}
            </div>
            <div class="card-body">  
              <!-- Table with stripped rows -->
              <div class="table-responsive">
                <table class="table table1" id="example">
                  <thead>
                    <tr>
                      <th scope="col">Sr.No</th>
                      <th scope="col">Email</th>
                      {{-- <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Services</th>
                      <th scope="col">Phone</th>
                      
                      <th scope="col">Message</th> --}}
                      <!-- <th scope="col">Status</th> -->
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Newsletter as $key => $record)
                   
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$record->email}}</td>
                      {{-- <td>{{$record->name}}</td>
                      <td>{{$record->address}}</td>
                      <td>{{$record->services}}</td>
                      <td>{{$record->phone}}</td>
                      <td>{{$record->message}}</td> --}}
                     
                      <!-- <td>
                        <div class="">
                          <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">
                            <span class="fa fa-check"> Active </span>
                          </a>
                        </div>
                      </td> -->
                      <td>
                        <div class="d-flex">
                          <a href="{{route('Newsletter.view',$record->id)}}"><span class="fa fa-eye"></span></a>&nbsp;
                          <a href="{{route('Newsletter.deleted',$record->id)}}"><span class="fa fa-trash text-danger"></span></a>
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