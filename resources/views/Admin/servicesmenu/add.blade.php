@include('Admin.include.head')
@include('Admin.include.header')
@include('Admin.include.asidebar')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Services in Menu
      <a type="submit" class="btn btn-danger" style="float:right;" href="{{url('admin/servicesmenu')}}">Back</a>
      </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Menu</li>
          <li class="breadcrumb-item active">Add Menu</li>
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
              <form class="row g-3" method="POST" action="{{route('adminservicesmenu.store')}}"  enctype="multipart/form-data">
			  @csrf
         <div class="col-md-12">
          <select class="form-select" id="inputCategory" name="menuname" required="">
            
            <option value="" disabled selected>Services Name</option>
            @foreach($services as $service)
          <option value="{{ $service->id }}" >
            {{ $service->name }}
          </option>
    
           @endforeach
        </select>
        </div> 
      
        
        <div class="col-md-6">
        <div class="form-group">
          <label for="dropdown">Status:</label>
          <select class="form-control" id="dropdown" name="status"  required="">
            <option value="" disabled selected>Select Status</option>
                  <option value="enabled">Enabled</option>
                  <option value="disabled">Disabled</option>
             
          </select>
      </div> 
    </div> 
    <div class="col-md-6">
      <label for="inputCategory" class="form-label">Page</label>
      <select class="form-select" id="inputCategory" name="slug" required="">
        <option value="" disabled selected>Select Page</option>
        @foreach($services as $service)
            <option value="{{ $service->id }}" >
                {{ $service->slug }}
            </option>
        @endforeach
    </select>
    </div>
      </div>
      <div class="tab-pane fade" id="arabic" role="tabpanel" aria-labelledby="arabic-tab">
        <div class="col-md-12">
         
          <select class="form-select" id="inputCategory" name="arabic_menuname" required="">
            
            <option value="" disabled selected>Services in Arabic</option>
            @foreach($services as $service)
          <option value="{{  $service->id }}" >
            {{ $service->arabic_title }}
          </option>
    
           @endforeach
        </select>
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
