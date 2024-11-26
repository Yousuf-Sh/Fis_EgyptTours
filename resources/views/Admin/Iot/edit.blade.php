@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Iot Update
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('/admin/Iot')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Iot</li>
          <li class="breadcrumb-item active">Iot choosing</li>
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
              <form class="row g-3"  method="POST" action="{{route('iot.update')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$Iot->id}}"/>
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" id="inputtitle" placeholder="" value="{{$Iot->title}}">
                </div> 
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Logo</label>
                  <input type="text" name="logo" class="form-control" id="inputtitle" placeholder="" value="{{$Iot->logo}}">
                </div>
                <div class="col-md-12">
                  <label for="inputState" class="form-label ckeditor">Short Description</label>
                  <textarea type="text" class="form-control" id="inputName5" rows="3" name="short_description">{{$Iot->description}}</textarea>
                </div>
                <!-- <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Label</label>
                  <input type="text" name="label" class="form-control" id="inputtitle" placeholder="" value="{{$Iot->label}}" >
                </div>  -->
                {{-- <div class="col-md-6">
                  <label for="inputState" class="form-label">Button</label>
                  <input type="text" name="button" class="form-control" id="inputtitle" placeholder="" value="{{$slider->button}}">
                </div> --}}
                {{-- <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="images"  accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                    <a href=""  ><img src="{{ asset('Backend/images/' . $Iot->images) }}" id="output"  width="150" ></a>
                </div> --}}
                
                
                {{-- <div class="col-md-12" style="text-align: right;">
                  <button type="submit" class="btn btn-primary submit">Update</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                </div> --}}
           

            </div>

            <div class="tab-pane fade" id="arabic" role="tabpanel" aria-labelledby="arabic-tab">
              <!-- Vertical Form -->
             <div class="row">
                <input type="hidden" name="id" value="{{$Iot->id}}"/>
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Title</label>
                  <input type="text" name="arabic_title" class="form-control" id="inputtitle" style="direction:rtl;"placeholder="" value="{{$Iot->arabic_title}}">
                </div> 
                <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Logo</label>
                  <input type="text" name="arabic_logo" class="form-control" id="inputtitle" placeholder="" value="{{$Iot->arabic_logo}}">
                </div>
                <div class="col-md-12">
                  <label for="inputState" class="form-label">Short Description</label>
                  <textarea type="text" class="form-control ckeditor" id="inputName5" rows="3" style="direction:rtl;"name="arabic_short_description">{{$Iot->arabic_short_description}}</textarea>
                </div>
                <!-- <div class="col-md-6">
                  <label for="inputtitle" class="form-label">Label</label>
                  <input type="text" name="label" class="form-control" id="inputtitle" placeholder="" value="{{$Iot->label}}" >
                </div>  -->
                {{-- <div class="col-md-6">
                  <label for="inputState" class="form-label">Button</label>
                  <input type="text" name="button" class="form-control" id="inputtitle" placeholder="" value="{{$slider->button}}">
                </div> --}}
                {{-- <div class="col-md-6">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="arabic_image"  accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile1(event)">
                    <a href=""  ><img src="{{ asset('Backend/images/' . $Iot->arabic_image) }}" id="output1"  width="150" ></a>
                </div> --}}
                
{{--                 
                <div class="col-md-12" style="text-align: right;">
                  <button type="submit" class="btn btn-primary submit">Update</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                </div> --}}
              <!-- Vertical Form -->

            </div>
          </div>
          {{-- <div class="col-md-6">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="images"  accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
            <a href=""  ><img src="{{ asset('Backend/images/' . $Iot->images) }}" id="output"  width="150" ></a>
        </div> --}}
          <div class="col-md-12" style="text-align: right;">
            <button type="submit" class="btn btn-primary submit">Update</button>
            <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
          </div>
        </form>
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