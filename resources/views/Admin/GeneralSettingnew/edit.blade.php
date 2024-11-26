@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>General Settings123</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">General Settings</li>
          <li class="breadcrumb-item active">Edit General Settings</li>
        </ol>
      </nav>
    </div> 
      @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <!-- End Page Title -->
    <section class="section">
      
      <div class="card">
        <div class="card-body">
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
          <form class="" method="POST" action="{{route('submitted.update')}}" enctype="multipart/form-data">
            <input type="hidden" value="{{$contact->id}}" name="id">
            @csrf
            <div class="row">
              <div class="card-header mt-2 mb-3 pb-0" >
                <h5 class="card-title p-0 pt-2">Information</h5>
              </div>
          
              <div class="col-md-6">  
                <label for="inputState" class="form-label">Email</label>
                <input type="text" class="form-control" id="inputName5" name="email" value="{{$contact->email}}" >
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Contact </label>
                <input type="number" class="form-control" id="inputName5" name="phone1" value="{{$contact->phone1}}">
              </div>
          
              <div class="col-md-6 mt-1">
                <label for="inputState" class="form-label">Our Newsletter  </label>
                <input type="text" class="form-control" id="inputName5" name="button" value="{{$contact->button}}" >
              </div>
            </div>
            <div class="row">
              <div class="card-header mt-3 mb-3 pb-0" >
                <h5 class="card-title p-0 pt-2">Pictures</h5>
              </div>
              
              {{-- <div class="col-md-6">
                <label for="image" class="form-label">Arabic Logo</label>
                <input type="file" name="arlogo" id="imgInp1"  accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile1(event)">
                <a   ><img src="{{asset('Backend/images/'.$contact->arlogo) }}" id="output1"  width="100" ></a>
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">English logo</label>
                <input type="file" name="enlogo" id="imgInp2"  accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile2(event)">
                <a  ><img src="{{asset('Backend/images/'.$contact->enlogo) }}" id="output2"  width="100" ></a>
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">Company Logo</label>
                <input type="file" name="logo" id="imgInp"  accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)" >
                <a ><img src="{{asset('Backend/images/'.$contact->logo) }}" id="output"  width="100" ></a>
              </div> --}}
            </div>
            <div class="row">
              <div class="card-header mt-3 mb-3 pb-0" >
                <h5 class="card-title p-0 pt-2">Social Links</h5>
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">Instagram Link</label>
                <input type="text" name="instagramlink" id="imgInp3"  accept="image/*" class="form-control input-default" placeholder="" value="{{$contact->instagramlink}}">
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">Facebook Link</label>
                <input type="text" name="facebooklink" id="imgInp4"   class="form-control input-default" placeholder="e" value="{{$contact->facebooklink}}">
              </div>
              <div class="col-md-6 mt-1">
                <label for="image" class="form-label">Twitter Link</label>
                <input type="text" name="twitterlink" id="imgInp5"  class="form-control input-default" placeholder="Select image" value="{{$contact->twitterlink}}">
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">Skype Link</label>
                <input type="text" name="skype" id="imgInp4"   class="form-control input-default" placeholder="e" value="{{$contact->skype}}">
              </div>
              <div class="col-md-6 mt-1">
                <label for="image" class="form-label">Linked
                  lin Link</label>
                <input type="text" name="linkdelin" id="imgInp5"  class="form-control input-default" placeholder="Select image" value="{{$contact->linkdelin}}">
              </div>
            </div>  
            <div class="row">
              <div class="card-header mt-3 mb-3 pb-0" >
                <h5 class="card-title p-0 pt-2">Footer</h5>
              </div>
              <div class="col-md-6 mt-1">
                <label for="image" class="form-label">Description</label>
               <textarea type="text" class="form-control " name="footer_description" rows="3"  >{{$contact->footer_description}}</textarea>
              </div>
              <div class="col-md-6 mt-1">
                <label for="image" class="form-label">Label Description</label>
               <textarea type="text" class="form-control " name="footer_label_description" rows="3"  >{{$contact->footer_label_description}}</textarea>
              </div>
              <div class="col-md-6 mt-1">
                <label for="image" class="form-label">Label</label>
                <input type="text"  id="imgInp5"  class="form-control input-default" placeholder="" name="footer_label" value="{{$contact->footer_label}}">
              </div>
            </div>
            {{-- <div class="col-md-12 mt-3" style="text-align: right;">
              <button type="submit" class="btn btn-primary submit">Submit</button>
              <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
            </div> --}}
         
        </div>

        <div class="tab-pane fade" id="arabic" role="tabpanel" aria-labelledby="arabic-tab">
         <div class="row">
            <input type="hidden" value="{{$contact->id}}" name="id">
            @csrf
            <div class="row">
              <div class="card-header mt-2 mb-3 pb-0" >
                <h5 class="card-title p-0 pt-2">Information</h5>
              </div>
          
              <div class="col-md-6">  
                <label for="inputState" class="form-label">Email</label>
                <input type="text" class="form-control" id="inputName5" name="arabic_email" value="{{$contact->arabic_email}}" >
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Contact </label>
                <input type="number" class="form-control" id="inputName5" name="arabic_phone1" value="{{$contact->arabic_phone1}}">
              </div>
          
              <div class="col-md-6 mt-1">
                <label for="inputState" class="form-label">Contact us for A free Inspection(Button)  </label>
                <input type="text" class="form-control" id="inputName5" name="arabic_button" value="{{$contact->arabic_button}}" >
              </div>
            </div>
            <div class="row">
              {{-- <div class="card-header mt-3 mb-3 pb-0" >
                <h5 class="card-title p-0 pt-2">Pictures</h5>
              </div>
               --}}
              {{-- <div class="col-md-6">
                <label for="image" class="form-label">Arabic Logo</label>
                <input type="file" name="arabic_arlogo" id="imgInp1"  accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile3(event)">
                <a   ><img src="{{asset('Backend/images/'.$contact->arabic_arlogo) }}" id="output3"  width="100" ></a>
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">English logo</label>
                <input type="file" name="arabic_enlogo" id="imgInp2"  accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile4(event)">
                <a  ><img src="{{asset('Backend/images/'.$contact->arabic_enlogo) }}" id="output4"  width="100" ></a>
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">Company Logo</label>
                <input type="file" name="arabic_logo" id="imgInp"  accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile5(event)" >
                <a ><img src="{{asset('Backend/images/'.$contact->arabic_logo) }}" id="output5"  width="100" ></a>
              </div> --}}
            </div>
            <div class="row">
              <div class="card-header mt-3 mb-3 pb-0" >
                <h5 class="card-title p-0 pt-2">Social Links</h5>
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">Instagram Link</label>
                <input type="text" name="arabic_instagramlink" id="imgInp3"  accept="image/*" class="form-control input-default" placeholder="" value="{{$contact->arabic_instagramlink}}">
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">Facebook Link</label>
                <input type="text" name="arabic_facebooklink" id="imgInp4"   class="form-control input-default" placeholder="" value="{{$contact->arabic_facebooklink}}">
              </div>
              <div class="col-md-6 mt-1">
                <label for="image" class="form-label">Twitter Link</label>
                <input type="text" name="arabic_twitterlink" id="imgInp5"  class="form-control input-default" placeholder="" value="{{$contact->arabic_twitterlink}}">
              </div>
              <div class="col-md-6">
                <label for="image" class="form-label">Skype Link</label>
                <input type="text" name="skype1" id="imgInp4"   class="form-control input-default" placeholder="e" value="{{$contact->skype1}}">
              </div>
              <div class="col-md-6 mt-1">
                <label for="image" class="form-label">Linked
                  lin Link</label>
                <input type="text" name="linkdelin1" id="imgInp5"  class="form-control input-default" placeholder="Select image" value="{{$contact->linkdelin1}}">
              </div>
            </div>  
            <div class="row">
            <div class="card-header mt-3 mb-3 pb-0" >
              <h5 class="card-title p-0 pt-2">Footer</h5>
            </div>
            <div class="col-md-6 mt-1">
              <label for="image" class="form-label">Description</label>
             <textarea type="text" class="form-control " name="footer_description_ar" rows="3" style="direction: rtl;" >{{$contact->footer_description_ar}}</textarea>
            </div>
            <div class="col-md-6 mt-1">
              <label for="image" class="form-label">Label Description</label>
             <textarea type="text" class="form-control " name="footer_label_description_ar" rows="3" style="direction: rtl;" >{{$contact->footer_label_description_ar}}</textarea>
            </div>
            <div class="col-md-6 mt-1">
              <label for="image" class="form-label">Label</label>
              <input type="text"  id="imgInp5" style="direction: rtl;" class="form-control input-default" placeholder="" name="footer_label_ar" value="{{$contact->footer_label_ar}}">
            </div>
          </div>
            {{-- <div class="col-md-12 mt-3" style="text-align: right;">
              <button type="submit" class="btn btn-primary submit">Submit</button>
              <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
            </div> --}}
          
        </div>
      </div>
      {{-- <div class="row">
      <div class="col-md-6">
        <label for="image" class="form-label">Arabic Logo</label>
        <input type="file" name="arlogo" id="imgInp1"  accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile1(event)">
        <a   ><img src="{{asset('Backend/images/'.$contact->arlogo) }}" id="output1"  width="100" ></a>
      </div>
      <div class="col-md-6">
        <label for="image" class="form-label">English logo</label>
        <input type="file" name="enlogo" id="imgInp2"  accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile2(event)">
        <a  ><img src="{{asset('Backend/images/'.$contact->enlogo) }}" id="output2"  width="100" ></a>
      </div>
      <div class="col-md-6">
        <label for="image" class="form-label">Company Logo</label>
        <input type="file" name="logo" id="imgInp"  accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)" >
        <a ><img src="{{asset('Backend/images/'.$contact->logo) }}" id="output"  width="100" ></a>
      </div> --}}
      <div class="col-md-12 mt-3" style="text-align: right;">
        <button type="submit" class="btn btn-primary submit">Submit</button>
        <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
      </div>
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
    var loadFile3 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output3');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
    var loadFile4 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output4');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
    var loadFile5 = function(event) {
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output5');
        output.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    };
  </script>

  </main>
@include('Admin.include.footer')
@include('Admin.include.script')