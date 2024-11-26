@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
    <div class="pagetitle">
        <h1>General Settings
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/submitted')}}">Back</a>
        </h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">General Settings</li>
            <li class="breadcrumb-item active">General Settings</li>
          </ol>
        </nav>
      </div>  
    <!-- End Page Title -->
    <section class="section">
      <div class="card">
        <div class="card-body">
          <!-- Multi Columns Form -->
          <form class="" method="POST" action="{{route('submitted.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="card-header mt-2 mb-3 pb-0" >
                <h5 class="card-title p-0 pt-2">Information</h5>
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Email</label>
                <input type="text" class="form-control" id="inputName5" name="email" value="" required>
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Contact </label>
                <input type="number" class="form-control" id="inputName5" name="phone1"  required>
              </div>
            </div>
            <div class="row">
              <div class="card-header mt-3 mb-3 pb-0" >
                <h5 class="card-title p-0 pt-2">Social Links</h5>
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Facebook Link</label>
                <input type="text" class="form-control" id="inputName5" name="facebooklink"  required>
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Twitter Link</label>
                <input type="text" class="form-control" id="inputName5" name="twitterlink"  required>
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Instagram Link</label>
                <input type="text" class="form-control" id="inputName5" name="instagramlink"  required>
              </div>
              
              <div class="col-md-6">
                <label for="inputState" class="form-label">Contact us for A free Inspection(Button)  </label>
                <input type="text" class="form-control" id="inputName5" name="button"  required>
              </div>
            </div>

            <div class="row">
              <div class="card-header mt-3 mb-3 pb-0" >
                <h5 class="card-title p-0 pt-2">Pictures</h5>
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">Upload Logo</label>
                <input type="file" name="logo" id="imgInp" required="" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)">
                <a   onClick="deleteImage(2)"><span class="fa fa-close"><img src="" id="output"  width="100" ></a>
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">AR Logo</label>
                <input type="file" name="arlogo" id="imgInp1" required="" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile1(event)">
                <a onClick="deleteImage1(2)"><span class="fa fa-close"><img src="" id="output1"  width="100" ></a>
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">EN Logo</label>
                <input type="file" name="enlogo" id="imgInp2" required="" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile2(event)">
                <a onClick="deleteImage2(2)"><span class="fa fa-close"><img src="" id="output2"  width="100" ></a>
              </div>
            </div>
            {{-- <div class="col-md-6">
              <label for="image" class="form-label">Instagram icon</label>
              <input type="file" name="instagramicon" id="imgInp3" required="" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile3(event)">
              <a href=""  onClick="deleteImage3(3)"><span class="fa fa-close"><img src="" id="output3"  width="100" ></a>
                  </div>
              <div class="col-md-6">
                <label for="image" class="form-label">Telephone Icon</label>
                <input type="file" name="telephoneicon" id="imgInp4" required="" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile4(event)">
                <a href=""  onClick="deleteImage4(4)"><span class="fa fa-close"><img src="" id="output4"  width="100" ></a>
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">Email Icon</label>
                <input type="file" name="emailicon" id="imgInp5" required="" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile5(event)">
                <a href=""  onClick="deleteImage5(5)"><span class="fa fa-close"><img src="" id="output5"  width="100" ></a>
              </div> 
            --}}
            <div class="col-md-12 mt-3" style="text-align: right;">
              <button type="submit" class="btn btn-primary submit">Submit</button>
            </div>
          </form>

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
      var loadFile1 = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById('output1');
          output.src = reader.result;
        };
         reader.readAsDataURL(event.target.files[0]);
      };
      var loadFile2 = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById('output2');
          output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
      };
      // var loadFile3 = function(event) {
      //   var reader = new FileReader();
      //   reader.onload = function(){
      //     var output = document.getElementById('output3');
      //     output.src = reader.result;
      //   };
      //   reader.readAsDataURL(event.target.files[0]);
      // };
      // var loadFile4 = function(event) {
      //   var reader = new FileReader();
      //   reader.onload = function(){
      //     var output = document.getElementById('output4');
      //     output.src = reader.result;
      //   };
      //   reader.readAsDataURL(event.target.files[0]);
      // };
      // var loadFile5 = function(event) {
      //   var reader = new FileReader();
      //   reader.onload = function(){
      //     var output = document.getElementById('output5');
      //     output.src = reader.result;
      //   };
      //   reader.readAsDataURL(event.target.files[0]);
      // };
    </script>
  </main>
@include('Admin.include.footer')
@include('Admin.include.script')