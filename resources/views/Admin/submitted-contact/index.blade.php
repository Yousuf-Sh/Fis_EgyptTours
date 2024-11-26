@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

<main id="main" class="main">
  <div class="pagetitle">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Submissions</li>
          <li class="breadcrumb-item active">Manage Contact</li>
        </ol>
      </nav>
  </div>
  <!-- End Page Title -->
    <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header d-flex">
            <!-- <h5 class="card-title">Contact</h5> -->
          </div>
          <div class="card-body">  
            <!-- Table with stripped rows -->
            <div class="table-responsive">
              <table class="table table1 " id="example">
                <thead>
                  <tr>
                    <th scope="col">Sr.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <!-- <th scope="col">Message</th> -->
                    <th scope="col">Status</th>
                   
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($contact as $key => $record)
                  <tr>
                    
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$record->name}}</td>
                    <td>{{$record->email}}</td>
                    <td>{{$record->subject}}</td>
                    <!-- <td>{{$record->message}}</td> -->
                    <td>{{$record->status}}</td>
                    <td>{{ $record->updated_at->format('d/m/Y H:i:s') }}</td>
                   
                   <!-- <td>
                      <div class="">
                        <a href="#" title="click to deactivate" class="btn1 btn btn-sm btn-warning">
                          <span class="fa fa-check"> Active </span>
                        </a>
                      </div>
                    </td>--> 
                    <td> 
                       <div class="d-flex">
                        <a href="{{route('submitted.view',$record->id)}}"><span class="fa fa-eye"> </span></a>&nbsp;
                        <a href="{{route('submitted.deleted',$record->id)}}"><span class="fa fa-trash text-danger"> </span></a>
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