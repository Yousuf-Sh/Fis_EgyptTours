@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Clients
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('/admin/clients')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Clients</li>
          <li class="breadcrumb-item active">Add Clients</li>
          <!-- <li class="breadcrumb-item ">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Product Detail Form</h5> -->

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('clients.store')}}" enctype="multipart/form-data">
              @csrf
                <div class="col-md-12">
                  <h5 class="form-heading">Client Information</h5>
                </div> 
              
                {{-- <div class="col-md-6">
                  <label for="inputName5" class="form-label">Client Name</label>
                  <input type="text" class="form-control" id="inputName5" name="name">
                </div> --}}
                <div class="col-md-6">
                  <label for="inputState" class="form-label"> Image logo</label>
                  <input type="file" name="image1" id="imgInp" required="" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                  <a href="" ><img src="" id="output"  width="100" ></a>
                    <div class="col-md-6 mt-4">
                <div class="" >
                  <button type="submit" class="btn btn-primary float-right submit">Submit</button>
                 
                </div>
              </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <script>
    var loadFile = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
  </script>
  <script>
    var loadFile1 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output1 = document.getElementById('output1');
        output1.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
  </script>
@include('Admin.include.footer')
@include('Admin.include.script')