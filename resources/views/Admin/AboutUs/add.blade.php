@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>About US 
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/about_us')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">About</li>
          <li class="breadcrumb-item active">Add </li>
          <!-- <li class="breadcrumb-item ">Layouts</li> -->
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
              <form class="row g-3" method="POST" action="{{route('aboutus.store')}}" enctype="multipart/form-data">
                @csrf
                  
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="inputtitle" placeholder="" required>
                </div>
                
                
                <div class="col-md-6">

                  <label for="inputState" class="form-label">Date</label>
                  <input type="date" name="date" class="form-control" id="inputtitle" placeholder="" required>
                </div>
                <div class="col-md-12">

                  <label for="inputState" class="form-label">Page Link</label>
                  <input type="text" name="link" class="form-control" id="inputtitle" placeholder="" required>
                </div>
               
              </div>
                <div class="tab-pane fade" id="arabic" role="tabpanel" aria-labelledby="arabic-tab">
              
            <div class="row">
           
           
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Title</label>
                  <input type="text" name="arabic_title" class="form-control" id="inputtitle" style="direction: rtl;" placeholder="" required>
                </div>
                
                
                <div class="col-md-6">

                  <label for="inputState" class="form-label">Date</label>
                  <input type="date" name="arabic_date" class="form-control" style="direction: rtl;" id="inputtitle" placeholder="" required>
                </div>
                <div class="col-md-12">

                  <label for="inputState" class="form-label">Page Link</label>
                  <input type="text" name="arabic_pagelink" class="form-control" style="direction: rtl;" id="inputtitle" placeholder="" required>
                </div>
            
                
            </div>
                
              </div>
            
            <div class="col-md-6">
              <label for="image" class="form-label">About Us page  Image</label>
              <input type="file" name="images1" id="imgInp"  accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile1(event)">
              <a href=""><img src="" id="output1"  width="100" ></a>
          </div>
          <div class="col-md-6">
            <label for="image" class="form-label">About Us page  Image</label>
            <input type="file" name="images2" id="imgInp"  accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile2(event)">
            <a href=""><img src="" id="output2"  width="100" ></a>
        </div>
              <div class="col-md-12" style="text-align: right;">
                <button type="submit" class="btn btn-primary submit">Submit</button>
                <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
              </div>
             
            </div> 
        
      </form>
    </div>
      </div>
    </div>
  </div>
</div>
    </section>
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
   <script>
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