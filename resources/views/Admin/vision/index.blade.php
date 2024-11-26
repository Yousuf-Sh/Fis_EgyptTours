@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')


  <main id="main" class="main" >
  <div class="pagetitle">
      <h1>Our Vision</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Vision</li>
          <li class="breadcrumb-item active">Manage Vision</li>
        </ol>
      </nav>
    </div>
    <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header d-flex">
            <!-- <h5 class="card-title">Home Slider</h5> -->
            <a href="{{route('vision.add')}}" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto add">
              <span class="fa fa-plus text-white"><b> ADD  </b></span>
            </a>
          </div>
          <div class="card-body">  
            <!-- Table with stripped rows -->
            <div class="table-responsive">
              <table class="table table1" id="example">
                <thead>
                  <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Title</th>
                    <!--<th scope="col">Status</th>-->
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($vision as $key => $chose)
                  <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$chose->title}}</td>
                    <!--<td>
                      <div class="">
                        <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">
                          <span class="fa fa-check"> Active </span>
                        </a>
                      </div>
                    </td>-->
                    <td>
                      <div class="d-flex">
                        <a href="{{route('vision.edit',$chose->id)}}" title="click to Edit" class="text-info"><span class="fa fa-pencil"></span></a>&nbsp;
                        <a href="{{route('vision.delete',$chose->id)}}" title="click to Delete" class="text-danger"><span class="fa fa-trash"></span></a>
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


      <!-- <div class="row">
        <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
          <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Recent Payments Queue</h4>
                  </div>
                  <div class="card-body">
                      <div class="table-responsive recentOrderTable" >
                          <table class="table verticle-middle table-responsive-md" id="example">
                              <thead>
                                  <tr>
                                      <th scope="col">Ward No.</th>
                                      <th scope="col">Patient</th>
                                      <th scope="col">Dr Name</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Bills</th>
                                      <th scope="col"></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>12</td>
                                      <td>Mr. Bobby</td>
                                      <td>Dr. Jackson</td>
                                      <td>01 August 2020</td>
                                      <td><span class="badge p-2 bg-primary">Checkin</span></td>
                                      <td>$120</td>
                                      <td>
                                          <div class="dropdown custom-dropdown mb-0">
                                              <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                  </div>
                  <div class="dropdown-menu dropdown-menu-right">
                                                  <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                  <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>10 </td>
                                      <td>Mr. Dexter</td>
                                      <td>Dr. Charles</td>
                                      <td>31 July 2020</td>
                                      <td><span class="badge bg-danger p-2">Panding</span></td>
                                      <td>$540</td>
                                      <td>
                                          <div class="dropdown custom-dropdown mb-0">
                                              <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                                              </div>
                                              <div class="dropdown-menu dropdown-menu-right">
                                                  <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                  <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>03 </td>
                                      <td>Mr. Nathan</td>
                                      <td>Dr. Frederick</td>
                                      <td>30 July 2020</td>
                                      <td><span class="badge p-2 bg-danger">Canceled</span></td>
                                      <td>$301</td>
                                      <td>
                                          <div class="dropdown custom-dropdown mb-0">
                                              <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                  </div>
                                              <div class="dropdown-menu dropdown-menu-right">
                                                  <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                  <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>05</td>
                                      <td>Mr. Aurora</td>
                                      <td>Dr. Roman</td>
              <td>29 July 2020</td>
                                      <td><span class="badge p-2 bg-success">Checkin</span></td>
                                      <td>$099</td>
                                      <td>
                                          <div class="dropdown custom-dropdown mb-0">
                  <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                  </div>
                                              <div class="dropdown-menu dropdown-menu-right">
                                                  <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                  <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>06</td>
                                      <td>Mr. Matthew</td>
                                      <td>Dr. Samantha</td>
              <td>28 July 2020</td>
                                      <td><span class="badge p-2 bg-success">Checkin</span></td>
                                      <td>$520</td>
                                      <td>
                                          <div class="dropdown custom-dropdown mb-0">
                  <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
                  </div>
                  <div class="dropdown-menu dropdown-menu-right">
                                                  <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                  <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                              </div>
                                          </div>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>   -->
    </section>

  </main><!-- End #main -->

  @include('Admin.include.footer')
@include('Admin.include.script')