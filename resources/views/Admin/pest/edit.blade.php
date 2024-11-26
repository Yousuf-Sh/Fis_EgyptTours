@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pest
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('/admin/pest')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Pest</li>
          <li class="breadcrumb-item active">Edit Pest</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Edit Category</h5> -->
              <ul class="nav nav-tabs mt-3" id="languageTabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="english-tab" data-bs-toggle="tab" href="#english" role="tab" aria-controls="english" aria-selected="true">English</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="arabic-tab" data-bs-toggle="tab" href="#arabic" role="tab" aria-controls="arabic" aria-selected="false">Arabic</a>
                </li>
              </ul>
              <div class="tab-content" id="languageTabsContent">
                <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('pest.update')}}" enctype="multipart/form-data">
			  @csrf
        <input type="hidden" name="id" value="{{$pest->id}}">
                {{-- <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title" value="{{$category->title}}">
                </div> --}}
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Name</label>
                  <input type="text" class="form-control" id="inputName5" name="name" value="{{$pest->name}}">
                </div>
                <div class="col-md-12">
                  <label for="short description" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" name="description">{{$pest->short_description}}</textarea>
                </div>
               

            </div>
            <div class="tab-pane fade" id="arabic" role="tabpanel" aria-labelledby="arabic-tab">
              <div class="row">
                <input type="hidden" name="id" value="{{$pest->id}}">
                      
                        <div class="col-md-6">
                          <label for="inputState" class="form-label">Name</label>
                          <input type="text" class="form-control" id="inputName5" style="direction:rtl;"name="arabic_name" value="{{$pest->arabic_name}}">
                        </div>
                        <div class="col-md-12">
                          <label for="short description" class="form-label">Description</label>
                          <textarea type="text" class="form-control ckeditor" id="inputName5" name="arabic_short_description">{{$pest->arabic_short_description}}</textarea>
                        </div>
                      
          </div>
        </div>
      
        <div class=" mt-3">
          <div class="col-md-12" style="text-align: right;">
            <button type="submit" class="btn btn-primary submit">Update</button>
            <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
          </div>
        </div>  
      </form>
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
  var loadFile1 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output1');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
@include('Admin.include.footer')
@include('Admin.include.script')
