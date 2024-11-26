@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Home Streaming
      <!-- <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/streaming')}}">Back</a> -->
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management</li>
          <li class="breadcrumb-item active">Edit Streaming</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
      @if(session('Success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('Success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Home Slider Form</h5> -->

              <!-- Vertical Form -->
              <form class="row g-3"  method="POST" action="{{route('streaming.update')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$slider->id}}"/>
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="inputtitle" placeholder="" value="{{$slider->title}}">
                </div> 
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" rows="3" name="short_description">{{$slider->short_description}}</textarea>
                </div>
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Label</label>
                  <input type="text" name="label" class="form-control" id="inputtitle" placeholder="" value="{{$slider->label}}" >
                </div> 
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Button</label>
                  <input type="text" name="button" class="form-control" id="inputtitle" placeholder="" value="{{$slider->button}}">
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="images"  accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                    <a href="" ><img src="{{ asset('Backend/images/' . $slider->images) }}" id="output"  width="150" ></a>
                </div>
                
                
                <div class="col-md-12" style="text-align: right;">
                  <button type="submit" class="btn btn-primary submit">Update</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
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
@include('Admin.include.footer')
@include('Admin.include.script')