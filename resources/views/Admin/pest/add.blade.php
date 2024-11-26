@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Pests
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('/admin/pest')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Pests</li>
          <li class="breadcrumb-item active">Add Pests</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Add Category</h5> -->
              <ul class="nav nav-tabs mt-3" id="languageTabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="english-tab" data-bs-toggle="tab" href="#english" role="tab" aria-controls="english" aria-selected="true">English</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="arabic-tab" data-bs-toggle="tab" href="#arabic" role="tab" aria-controls="arabic" aria-selected="false">Arabic</a>
                </li>
              </ul>
              <div class="tab-content" id="languageTabsContent">
                <!-- English Tab Content -->
                <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('pest.store')}}"  enctype="multipart/form-data">
			  @csrf
         <div class="col-md-12">
          <label for="inputState" class="form-label">title</label>
          <input type="text" class="form-control" id="inputName5" name="name" required="">
        </div> 
       
        <div class="col-md-12">
          <label for="description" class="form-label">Description</label>
          <textarea type="text" class="form-control ckeditor" id="inputName5" name="short_description"></textarea>
        </div>
      </div>
      <div class="tab-pane fade" id="arabic" role="tabpanel" aria-labelledby="arabic-tab">
        <div class="col-md-12">
          <label for="inputState" class="form-label">Title</label>
          <input type="text" class="form-control" id="inputName5" name="arabic_name" required="" style="direction:rtl;">
        </div> 
       
        <div class="col-md-12">
          <label for="description" class="form-label">Description</label>
          <textarea type="text" class="form-control ckeditor" id="inputName5" name="arabic_short_description"></textarea>
        </div>

            </div>
            
            <div class=" mt-3">
              <div class="col-md-12" style="text-align: right;">
                <button type="submit" class="btn btn-primary submit">Submit</button>
              </div>
            </div>  
          </form>
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
