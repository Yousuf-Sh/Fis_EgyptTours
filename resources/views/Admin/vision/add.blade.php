@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Reason For Choosing
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('/admin/vision')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Choosing</li>
          <li class="breadcrumb-item active">Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Home Slider Form</h5> -->
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
              <!-- Vertical Form -->
              <form class="row g-3"  method="POST" action="{{route('vision.store')}}" enctype="multipart/form-data">
                @csrf
                  
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="inputtitle" placeholder="" required>
                </div>
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Logo</label>
                  <input type="text" name="logo" class="form-control" id="inputtitle" placeholder="" required>
                </div>
                {{-- <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Label</label>
                  <input type="text" name="label" class="form-control" id="inputtitle" placeholder="" required>
                </div>  --}}
                <div class="col-md-12">

                  <label for="inputState" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor"  id="inputName5" rows="3" name="short_description" required></textarea>
                </div>
                {{-- <div class="col-md-6">
                  <label for="inputState" class="form-label">Button</label>
                  <input type="text" name="button" class="form-control" id="inputtitle" placeholder="">
                </div> --}}
                {{-- <div class="col-md-6">
                  <label for="inputState" class="form-label">Image</label>
                  <input type="file" name="image" id="imgInp" required="" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)" >
                  <a href="" ><img src="" id="output"  width="100" ></a>
                    
                </div> --}}
              </div>
                <div class="tab-pane fade" id="arabic" role="tabpanel" aria-labelledby="arabic-tab">
                  <!-- Arabic Form Content -->
                 
                <div class="row">
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Title</label>
                  <input type="text" name="arabic_title" class="form-control" id="inputtitle" style="direction:rtl;" placeholder="" required>
                </div>
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Logo</label>
                  <input type="text" name="arabic_logo" class="form-control" id="inputtitle" placeholder="" required>
                </div>
                {{-- <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Label</label>
                  <input type="text" name="label" class="form-control" id="inputtitle" placeholder="" required>
                </div>  --}}
                <div class="col-md-12">

                  <label for="inputState" class="form-label">Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" rows="3" style="direction:rtl;" name="arabic_short_description" required></textarea>
                </div>
                
              
            </div>
            </div>
           
            <div class="col-md-12" style="text-align: right;">
              <button type="submit" class="btn btn-primary submit">Submit</button>
              <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
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