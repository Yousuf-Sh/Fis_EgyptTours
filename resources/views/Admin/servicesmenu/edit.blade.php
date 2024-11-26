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
          <li class="breadcrumb-item">Services</li>
          <li class="breadcrumb-item active">Add Services</li>
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
              <form class="row g-3" method="POST" action="{{route('adminservicesmenu.update')}}"  enctype="multipart/form-data">
			  @csrf
        <input type="hidden" class="form-control" id="inputName5" name="id" value="{{$Servicesmenu->id}}">
         <div class="col-md-12">
          <label for="inputState" class="form-label">Services Name</label>
          <input type="text" class="form-control" id="inputName5" name="menuname" value="{{$Servicesmenu->menuname}}">
        </div> 
       
       
        <div class="col-md-12">
        <div class="form-group">
          <label for="dropdown">Status:</label>
          <select class="form-control" id="dropdown" name="status">
            <option value="enabled" {{ $Servicesmenu->status == 'enabled' ? 'selected' : '' }}>Enabled</option>
            <option value="disabled" {{ $Servicesmenu->status == 'disabled' ? 'selected' : '' }}>Disabled</option>
        </select>
      </div> 
    </div> 
    {{-- <div class="col-md-6">
      <label for="inputState" class="form-label">PageLink</label>
      <input type="text" class="form-control" id="inputName5" name="pagelink" value="{{$Servicesmenu->pagelink}}">
    </div> --}}
      </div>
      <div class="tab-pane fade" id="arabic" role="tabpanel" aria-labelledby="arabic-tab">
        <div class="col-md-12">
          <input type="hidden" class="form-control" id="inputName5" name="id" value="{{$Servicesmenu->id}}">
          <label for="inputState" class="form-label">Services Name</label>
          <input type="text" class="form-control" id="inputName5" style="direction: rtl;" name="arabic_menuname" value="{{$Servicesmenu->arabic_menuname}}">
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
