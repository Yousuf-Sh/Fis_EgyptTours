@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')
<main id="main" class="main">
<div class="pagetitle">
      <h1>Clients</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Clients</a></li>
          <li class="breadcrumb-item active">Manage Clients</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex">
              <!-- <h5 class="card-title">Services</h5> -->
              <a href="{{route('clients.add')}}" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto add">
                <span class="fa fa-plus text-white "><b> ADD  </b></span>
              </a>
            </div>
            <div class="card-body">  
              <!-- Table with stripped rows -->
              <div class="table-responsive">
                <table class="table table1" id="example">
                  <thead>
                    <tr>
                      <th scope="col">Sr</th>
                      <th scope="col">Image</th> 
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Client as $key => $clients)
                  
                    <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td><img src="{{ asset('Backend/images/' . $clients->image) }}" id="output"  width="100" ></td>
                      <td>
                        <div class="d-flex">
                          
                         <a href="{{route('clients.edit',$clients->id)}}" title="click to Edit" class="text-info m-1"><span class="fa fa-pencil"> </span></a>&nbsp;
                          <a href="{{route('clients.delete',$clients->id)}}" title="click to Delete" class="text-danger m-1"><span class="fa fa-trash"> </span></a>
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