@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Services
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/services')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Services</li>
          <li class="breadcrumb-item active">Edit Services</li>
          <!-- <li class="breadcrumb-item active">Layouts</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
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
                <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="{{route('services.update')}}" enctype="multipart/form-data">
			  @csrf
              <input type="hidden" name="id" value="{{$services->id}}">
              <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="name" value="{{$services->name}}" required="">
                </div>
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5" name="tagline" value="{{$services->tagline}}" required="">
                </div>
                <div class="col-md-6">
    <label for="inputCategory" class="form-label">Services</label>
   <select class="form-select" id="inputCategory" name="services_type" required="">
    <option value="">Select Services</option>
    
        <option value="{{ $services->id }}">{{ $services->name }}</option>
    
</select>

</div>

              <div class="col-md-6">
                <div class="form-group mt-3">
                    <label>Publish*</label><br>
                    <label class="radio-inline">
                        <input type="radio" class="form-data" name="ispublish" value="1" {{ $services->ispublish == 1 ? 'checked' : '' }}> Publish
                    </label>&nbsp;&nbsp;
                    <label class="radio-inline">
                        <input type="radio" class="form-data" name="ispublish" value="0" {{ $services->ispublish == 0 ? 'checked' : '' }}> Unpublish
                    </label>
                </div>
            </div>
            
              
                {{-- <div class="col-md-6">
                  <label for="inputState" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title" value="{{$record->title}}" required="">
                </div> --}}
                {{-- <div class="col-md-6">
                  <label for="inputState" class="form-label">Button</label>
                  <input type="text" class="form-control" id="inputName5" name="button" required="" value="{{$services->button}}">
                </div> --}}
                {{-- <div class="col-md-6">
                  <label for="inputState" class="form-label">Description</label>
                  <textarea type="text" class="form-control" id="inputName5" name="description" rows="3" required="" >{{$services->description}}</textarea>
                </div> --}}
                {{-- <div class="col-md-6">
                  <label for="inputState" class="form-label"> Image</label>
                  <input type="file" name="image1" id="imgInp"  accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
                  <a ><img src="{{ asset('Backend/images/' . $services->member_image) }}" id="output"  width="100" ></a>
                </div> --}}
                {{-- <div class=" mt-3">
                  <div class="col-md-12" style="text-align: right;">
                    <button type="submit" class="btn btn-primary add">Submit</button>
                    <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                  </div>
                </div>   --}}
             

            </div>
            <div class="tab-pane fade" id="arabic" role="tabpanel" aria-labelledby="arabic-tab">
              <!-- Multi Columns Form -->
              {{-- <form class="row g-3" method="POST" action="{{route('services.update')}}" enctype="multipart/form-data">
			  @csrf --}}
        <div class="row">
              <input type="hidden" name="id" value="{{$services->id}}">
              <div class="col-md-6">
                  <label for="inputState" class="form-label">label</label>
                  <input type="text" class="form-control" style="direction:rtl;"id="inputName5" name="arabic_title" value="{{$services->arabic_title}}" required="">
                </div>
               
                <div class="col-md-6">
                  <label for="inputState" class="form-label">Tagline</label>
                  <input type="text" class="form-control" id="inputName5" name="arabic_tagline" value="{{$services->arabic_tagline}}" required="">
                </div>
                <div class="col-md-6">
                  <label for="inputCategory" class="form-label">Services</label>
                  <select class="form-select" id="inputCategory" name="arabic_services_type" required="">
                      <option value="">Select Services</option>
                      
                      <option value="{{ $services->id }}">{{ $services->name }}</option></option>
                      
                  </select>
              </div>
              <div class="col-md-6">
                <div class="form-group mt-3">
                    <label>Publish*</label><br>
                    <label class="radio-inline">
                        <input type="radio" class="form-data" name="ar_ispublish" value="1" {{ $services->ispublish == 1 ? 'checked' : '' }}> Publish
                    </label>&nbsp;&nbsp;
                    <label class="radio-inline">
                        <input type="radio" class="form-data" name="ar_ispublish" value="0" {{ $services->ispublish == 0 ? 'checked' : '' }}> Unpublish
                    </label>
                </div>
            </div>
                {{-- <div class="col-md-6">
                  <label for="inputState" class="form-label">Description</label>
                  <textarea type="text" class="form-control" style="direction:rtl;"id="inputName5" name="arabic_description" rows="3" required="" >{{$services->arabic_description}}</textarea>
                </div> --}}
                {{-- <div class="col-md-6">
                  <label for="inputState" class="form-label"> Image</label>
                  <input type="file" name="arabic_image"  id="imgInp"  accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile1(event)">
                  <a href="" ><img src="{{ asset('Backend/images/' . $services->arabic_image) }}" id="output1"  width="100" ></a>
                </div> --}}
               
             <!-- End Multi Columns Form -->

            </div>
          </div>
          <div class="col-md-6">
            <label for="inputState" class="form-label"> Image</label>
            <input type="file" name="image1" id="imgInp"  accept="image/*" class="form-control input-default " placeholder="Select image" onchange="loadFile(event)">
            <a ><img src="{{ asset('Backend/images/' . $services->member_image) }}" id="output"  width="100" ></a>
          </div>
          <div class=" mt-3">
            <div class="col-md-12" style="text-align: right;">
              <button type="submit" class="btn btn-primary add">Submit</button>
              <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
            </div>
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
    var reader= new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output1');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  document.addEventListener('DOMContentLoaded', function() {
    
      //alert('hdsjf');
     
      function toggleLanguageTab(lang) {
        console.log('Language tab clicked:', lang);
        if (lang === 'english') {
          document.getElementById('english-tab').classList.add('active');
      document.getElementById('arabic-tab').classList.remove('active');
      document.getElementById('english').classList.add('active', 'show');
      document.getElementById('arabic').classList.remove('active', 'show');
        
          document.getElementById('title-label').textContent = 'Title';
          document.getElementById('label-label').textContent = 'Label';
          document.getElementById('description-label').textContent = 'Description';
          document.getElementById('button-label').textContent = 'Button';
          document.getElementById('imgInp').textContent = 'Image';
        
         
        } else {
      
        document.getElementById('arabic-tab').classList.add('active');
      document.getElementById('english-tab').classList.remove('active');
      document.getElementById('arabic').classList.add('active', 'show');
      document.getElementById('english').classList.remove('active', 'show');
          document.getElementById('arabic').classList.add('active');
          document.getElementById('english').classList.remove('active');
          document.getElementById('arabic').classList.add('rtl');
         
         
        }
      }
    
      // Event listener for English tab click
      document.getElementById('english-tab').addEventListener('click', function() {
        toggleLanguageTab('english');
      });
    
      // Event listener for Arabic tab click
      document.getElementById('arabic-tab').addEventListener('click', function() {
        toggleLanguageTab('arabic');
      });
    
      // Function to handle file input change event
   
    });
</script>
@include('Admin.include.footer')
@include('Admin.include.script')
