@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Client
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('/admin/about_us')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Management About US</li>
          <li class="breadcrumb-item active">Edit About US</li>
          <!-- <li class="breadcrumb-item ">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section ">
      <div class="row mt-3">
        

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
                  <!-- English Form Content -->
                  <form class="row g-3" method="POST" action="{{route('aboutus.update')}}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="id" value="{{$aboutus->id}}">
               
                      <!-- Title -->
                      <div class="col-md-6">
                          <label for="inputtitle" id="title-label" class="form-label">Title</label>
                          <input type="text" name="title" class="form-control" id="inputtitle" placeholder="" value="{{ $aboutus->title }}">
                      </div> 
                      <!-- Short Description -->
                      <div class="col-md-6">
                        <label for="inputState" id="button-label" class="form-label">date</label>
                        <input type="date" name="date" class="form-control" id="inputtitle" placeholder="" value="{{ $aboutus->date }}">
                    </div>
              
                      <div class="col-md-12">
                        <label for="inputState" id="button-label" class="form-label">Page Link</label>
                        <input type="text" name="link" class="form-control" id="inputtitle" value="{{ $aboutus->link }}">
                      </div>
                      
                    
                </div>
                <div class="tab-pane fade" id="arabic" role="tabpanel" aria-labelledby="arabic-tab">
                <!-- Arabic Form Content -->
                <div class="row">
                    <input type="hidden" name="id" value="{{ $aboutus->id }}" />
                    <!-- Arabic Form Fields -->
                    <!-- Title -->
                    <div class="col-md-6">
                        <label for="inputtitle" id="arabic_title" class="form-label text-right">Title</label>
                        <input type="text" name="arabic_title" class="form-control" style="direction: rtl;" placeholder="أدخل العنوان باللغة العربية" value="{{ $aboutus->arabic_title }}">
                    </div> 
                    <!-- Short Description -->
                    <div class="col-md-6">
                      <label for="inputState" id="arabic_button" class="form-label">Date</label>
                      <input type="date" name="arabic_date" class="form-control" style="direction: rtl;"placeholder="" value="{{ $aboutus->arabic_date }}">
                  </div>
                  <div class="col-md-12">
                    <label for="inputState" id="button-label" class="form-label">Page Link</label>
                    <input type="text" name="arabic_link" class="form-control" id="inputtitle" value="{{ $aboutus->arabic_pagelink }}">
                  </div>
                    <!-- Label -->
                    {{-- <div class="col-md-6">
                        <label for="inputtitle" id="arabic_label"class="form-label">Label</label>
                        <input type="text" name="arabic_label" class="form-control" style="direction: rtl;"placeholder="أدخل التسمية باللغة العربية" value="{{ $aboutus->arabic_label }}" >
                    </div>  --}}
                    <!-- Button -->
                    
                    <!-- Image Upload -->
                    {{-- <div class="col-md-6">
                        <label for="image" id="arabic_images"  class="form-label">Image</label>
                        <input type="file" name="images" accept="image/*" class="form-control input-default" placeholder="Select Arabic image" onchange="loadFile1(event)">
                        <a href=""><img src="{{ asset('Backend/images/' . $aboutus->images) }}" id="output1"  width="150" ></a>
                    </div> --}}
                    <!-- Submit Button -->
                      <!-- Image Upload -->
                      
                    <!-- End Arabic Form -->
                </div>
              </div>
            <div class="col-md-6">
              <label for="image" id="imgInp" class="form-label">Update Image</label>
              <input type="file" name="images1" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
              <a ><img src="{{ asset('Backend/images/' . $aboutus->images1) }}" id="output"  width="150" ></a>
          </div>
          <div class="col-md-6">
            <label for="image" id="imgInp" class="form-label">Update Image</label>
            <input type="file" name="images2" accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile2(event)">
            <a ><img src="{{ asset('Backend/images/' . $aboutus->images2) }}" id="output2"  width="150" ></a>
        </div>
          <div class="col-md-12" style="text-align: right;">
              <button type="submit" class="btn btn-primary submit"> Update</button>
          </div>
        </form>
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
    var loadFile2 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output1 = document.getElementById('output2');
        output1.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
  </script>
@include('Admin.include.footer')
@include('Admin.include.script')