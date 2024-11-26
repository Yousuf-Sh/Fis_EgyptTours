
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
          <li class="breadcrumb-item active">Add Services Details</li>
        </ol>
      </nav>
    </div>
    <section class="section">
      <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-body">
                      <!-- Language Tabs -->
                      <ul class="nav nav-tabs mt-3" id="languageTabs" role="tablist">
                          @foreach($languages as $index => $language)
                              <li class="nav-item" role="presentation">
                                  <a class="nav-link {{ $index === 0 ? 'active' : '' }}" 
                                     id="{{ $language->slug }}-tab" 
                                     data-bs-toggle="tab" 
                                     href="#{{ $language->slug }}" 
                                     role="tab" 
                                     aria-controls="{{ $language->slug }}" 
                                     aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                      {{ ucfirst($language->name) }}
                                  </a>
                              </li>
                          @endforeach
                      </ul>
  
                      <div class="tab-content" id="languageTabsContent">
                          @foreach($languages as $index => $language)
                              <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" 
                                   id="{{ $language->slug }}" 
                                   role="tabpanel" 
                                   aria-labelledby="{{ $language->slug }}-tab">
                                  
                                  <!-- Multi Columns Form -->
                                  <form class="row g-3" method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                                      @csrf
                                      
                                      <div class="col-md-12">
                                          <label for="title_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Title</label>
                                          <input type="text" name="{{ $language->slug }}_title" class="form-control" id="title_{{ $language->slug }}"  {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}>
                                      </div>
  
                                      <div class="col-md-6">
                                          <label for="feature1_{{ $language->slug }}" class="form-label">Feature 1</label>
                                          <input type="text" name="{{ $language->slug }}_feature1" class="form-control" id="feature1_{{ $language->slug }}">
                                      </div>
                                      <div class="col-md-6">
                                          <label for="feature2_{{ $language->slug }}" class="form-label">Feature 2</label>
                                          <input type="text" name="{{ $language->slug }}_feature2" class="form-control" id="feature2_{{ $language->slug }}">
                                      </div>
                                      <div class="col-md-6">
                                          <label for="feature3_{{ $language->slug }}" class="form-label">Feature 3</label>
                                          <input type="text" name="{{ $language->slug }}_feature3" class="form-control" id="feature3_{{ $language->slug }}">
                                      </div>
                                      <div class="col-md-6">
                                          <label for="feature4_{{ $language->slug }}" class="form-label">Feature 4</label>
                                          <input type="text" name="{{ $language->slug }}_feature4" class="form-control" id="feature4_{{ $language->slug }}">
                                      </div>
  <hr>
  <h3 class="text-center">Transportation</h3>
</hr>
<div class="col-md-6">
  <label for="title_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Heading</label>
  <input type="text" name="{{ $language->slug }}_tr_title" class="form-control" id="title_{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}>
</div>
<div class="col-md-6">
    <label for="description_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Short Description</label>
    <textarea name="{{ $language->slug }}_tr_description" class="form-control" id="description_{{ $language->slug }}" rows="3" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} ></textarea>
</div>
<div class="col-md-6">
  <label for="title_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Heading</label>
  <input type="text" name="{{ $language->slug }}_tr_title1" class="form-control" id="title_{{ $language->slug }}"  {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}>
</div>
<div class="col-md-6">
    <label for="description_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Short Description</label>
    <textarea name="{{ $language->slug }}_tr_description1" class="form-control" id="description_{{ $language->slug }}" rows="3" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} ></textarea>
</div>

                                      <div class="col-md-6">
  <label for="title_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Heading</label>
  <input type="text" name="{{ $language->slug }}_tr_titl2" class="form-control" id="title_{{ $language->slug }}"  {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}>
</div>
                                      <div class="col-md-6">
                                          <label for="description_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Short Description</label>
                                          <textarea name="{{ $language->slug }}_tr_description2" class="form-control" id="description_{{ $language->slug }}" rows="3" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} ></textarea>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="title_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Heading</label>
                                        <input type="text" name="{{ $language->slug }}_tr_title1" class="form-control" id="title_{{ $language->slug }}" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }}>
                                      </div>
                                      <div class="col-md-6">
                                          <label for="description_{{ $language->slug }}" class="form-label">{{ ucfirst($language->name) }} Short Description</label>
                                          <textarea name="{{ $language->slug }}_tr_description1" class="form-control" id="description_{{ $language->slug }}" rows="3" {{ $language->slug === 'ar' ? 'style=direction:rtl;' : '' }} ></textarea>
                                      </div>

                          </div>
                          @endforeach
                          <div class="row">
                          <div class="col-md-6 mt-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile(event)">
                            <a href="#"><img src="" id="output" width="150"></a>
                        </div>
                       
                        <div class="col-md-6 mt-3">
                          <label for="image" class="form-label">Image</label>
                          <input type="file" name="image1" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile1(event)">
                          <a href="#"><img src="" id="output1" width="150"></a>
                      </div> 
                      <div class="col-md-6 mt-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image2" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile2(event)">
                        <a href="#"><img src="" id="output2" width="150"></a>
                    </div> <div class="col-md-6 mt-3">
                      <label for="image" class="form-label">Image</label>
                      <input type="file" name="image3" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile3(event)">
                      <a href="#"><img src="" id="output3" width="150"></a>
                  </div>
                </div> <div class="col-md-6 mt-3">
                  <label for="image" class="form-label">Image</label>
                  <input type="file" name="image4" accept="image/*" class="form-control input-default" placeholder="Select image" onchange="loadFile4(event)">
                  <a href="#"><img src="" id="output4" width="150"></a>
              </div>
                        </div>
                        <div class="col-md-12 mt-3" style="text-align: right;">
                            <button type="submit" class="btn btn-primary add">Submit</button>
                        </div>
                      </form>
                      </div>
                  </div>
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
      var output1 = document.getElementById('output1');
      output1.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile3 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output1 = document.getElementById('output1');
      output1.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  var loadFile4 = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output1 = document.getElementById('output1');
      output1.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  // document.addEventListener('DOMContentLoaded', function() {
    
  //   function toggleLanguageTab(lang) {
  //     console.log('Language tab clicked:', lang);
  //     if (lang === 'english') {
  //       document.getElementById('english-tab').classList.add('active');
  //   document.getElementById('arabic-tab').classList.remove('active');
  //   document.getElementById('english').classList.add('active', 'show');
  //   document.getElementById('arabic').classList.remove('active', 'show');
       
  //       document.getElementById('title-label').textContent = 'Title';
  //       document.getElementById('label-label').textContent = 'Label';
  //       document.getElementById('description-label').textContent = 'Description';
  //       document.getElementById('button-label').textContent = 'Button';
  //       document.getElementById('imgInp').textContent = 'Image';
      
       
  //     } else {
   
  //     document.getElementById('arabic-tab').classList.add('active');
  //   document.getElementById('english-tab').classList.remove('active');
  //   document.getElementById('arabic').classList.add('active', 'show');
  //   document.getElementById('english').classList.remove('active', 'show');
  //       document.getElementById('arabic').classList.add('active');
  //       document.getElementById('english').classList.remove('active');
  //       document.getElementById('arabic').classList.add('rtl');
       
  //     }
  //   }
  
  //   // Event listener for English tab click
  //   document.getElementById('english-tab').addEventListener('click', function() {
  //     toggleLanguageTab('english');
  //   });
  
  //   // Event listener for Arabic tab click
  //   document.getElementById('arabic-tab').addEventListener('click', function() {
  //     toggleLanguageTab('arabic');
  //   });
  
  //   // Function to handle file input change event
 
  // });

</script>
@include('Admin.include.footer')
@include('Admin.include.script')
