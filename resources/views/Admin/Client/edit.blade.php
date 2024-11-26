@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Client
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/clients')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management Client</li>
          <li class="breadcrumb-item active">Edit Client</li>
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
              <form class="row g-3" method="POST" action="{{route('clients.update')}}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{$clients->id}}">
                <div class="col-md-12">
                  <h5 class="form-heading">Client Information</h5>
                </div> 
               
                          <!-- <div class="col-md-6">
                            <label for="inputText" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$clients->title}}">
                          </div> -->
                          
                          <div class="col-md-6">
                            <label for="inputState" class="form-label">Image</label>
                            <input type="file" name="image" id="imgInp" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                            <a href="" ><img src="{{ asset('Backend/images/' . $clients->image) }}" id="output"  width="100" ></a>
                          </div>

                

                <div class="" style="float: right; margin-left: 1px;">
                  <button type="submit" class="btn btn-primary float-end submit">Update</button>
                 
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