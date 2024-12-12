@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')


  <main id="main" class="main" >
  <div class="pagetitle">
      <h1>Lanugages</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Lanugages</li>
          <li class="breadcrumb-item active">Manage Lanugages</li>
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
            <a href="{{route('languages.add')}}" title="click to Add New Row" class="btn1 btn btn-primary my-auto ms-auto add">
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
                    <th scope="col">Language</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($languages as $key => $language)
                    <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$language->name}}</td>
                      <td>{{$language->slug}}</td>
                      <td>
                        <div class="d-flex">
                          <a href="{{route('languages.edit',$language->id)}}" title="click to Edit" class="text-info"><span class="fa fa-pencil"></span></a>&nbsp;
                          <a href="{{route('languages.delete',$language->id)}}" title="click to Delete" class="text-danger"><span class="fa fa-trash"></span></a>
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